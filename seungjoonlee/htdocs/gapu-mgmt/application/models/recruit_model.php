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
        $this->user_table = 'bt_user';
        $this->category_table = 'gapu_notice_category';
        $this->selection_get_join = $this->table.".*, ". $this->user_table.".username, ".$this->category_table.".label";
    }

    function gets()
    {
        $this->db->select($this->selection_get_join);
        $this->db->from($this->table);
        $this->db->join($this->user_table, $this->user_table.'._userid = '. $this->table.'.for_userid');
        $this->db->join($this->category_table, $this->category_table.'._categoryid = '. $this->table.'.for_categoryid');
        return $this->db->get()->result();
    }

    function change_folder_name($itemid, $content, $dir_name)
    {
        try {
            $input_data = array(
                'folder_name' => $itemid . '_' . $dir_name,
                'content' => str_replace($dir_name, $itemid . '_' . $dir_name, $content)
            );

            $this->db->where('_recruitid', $itemid);
            $this->db->update($this->table, $input_data);
            return $this->db->affected_rows();
        } catch (Exception $e) {
            return false;
        }
    }

    function add($data)
    {
        $input_data = array(
            'title' => $data['title'],
            'content' => $data['content'],
            'for_userid' => $data['for_userid'],
            'for_categoryid' => $data['for_categoryid'],
            'isdeprecated' => FALSE,
            'created' => date("Y-m-d")
        );

        $this->db->insert($this->table, $input_data);
        return $this->db->insert_id();
    }

    function update($data)
    {
        $input_data = array(
            'title' => $data['title'],
            'content' => $data['content'],
            'for_userid' => $data['for_userid'],
            'for_categoryid' => $data['for_categoryid'],
        );

        $this->db->where('_recruitid', $data['itemid']);
        $this->db->update($this->table, $input_data);
        return $this->db->affected_rows();
    }

    function get_recruit_by_id($itemid)
    {
        $where_clause = array(
            $this->table.'._recruitid' => $itemid,
        );

        $this->db->select($this->selection_get_join);
        $this->db->from($this->table);
        $this->db->where($where_clause);
        $this->db->join($this->user_table, $this->user_table.'._userid = '. $this->table.'.for_userid');
        $this->db->join($this->category_table, $this->category_table.'._categoryid = '. $this->table.'.for_categoryid');
        return $this->db->get()->row();
    }

    function change_isdeprecated($itemid, $isdeprecated)
    {
        try {
            $input_data = array(
                'isdeprecated' => $isdeprecated
            );
            $this->db->where('_recruitid', $itemid);
            $this->db->update($this->table, $input_data);
            return $this->db->affected_rows();
        } catch (Exception $e) {
            return -1;
        }
    }
}