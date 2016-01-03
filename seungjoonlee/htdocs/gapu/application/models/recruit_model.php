<?php

class Recruit_model extends CI_Model
{
    private $table;
    private $user_table;
    private $category_table;
    private $selection_get_join;

    function __construct()
    {
        parent::__construct();
        $this->table = 'gapu_recruit';
        $this->user_table = 'gapu_user';
        $this->category_table = 'gapu_notice_category';
        $this->selection_get_join = $this->table.".*, ". $this->user_table.".username, ".$this->category_table.".label";
    }

    function get_items($page, $per_page)
    {
        $where_clause = array(
            $this->table.'.isdeprecated' => false,
            $this->user_table.'.isdeprecated' => false,
            $this->category_table.'.isdeprecated' => false
        );

        $offset = $per_page * ($page - 1);
        $this->db->select($this->selection_get_join);
        $this->db->from($this->table);
        $this->db->where($where_clause);
        $this->db->order_by($this->table.'._recruitid', 'desc');
        $this->db->limit($per_page, $offset);
        $this->db->join($this->user_table, $this->user_table.'._userid = '. $this->table.'.for_userid');
        $this->db->join($this->category_table, $this->category_table.'._categoryid = '. $this->table.'.for_categoryid');
        return $this->db->get()->result();
    }

    function get_all_count()
    {
        $where_clause = array(
            $this->table.'.isdeprecated' => false,
            $this->user_table.'.isdeprecated' => false,
            $this->category_table.'.isdeprecated' => false
        );

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($where_clause);
        $this->db->join($this->user_table, $this->user_table.'._userid = '. $this->table.'.for_userid');
        $this->db->join($this->category_table, $this->category_table.'._categoryid = '. $this->table.'.for_categoryid');
        return $this->db->count_all_results();
    }
}