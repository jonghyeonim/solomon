<?php

class Recruit_category_model extends CI_Model
{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'gapu_notice_category';
    }

    /*
     * categoryid를 넘겨받아 category 정보를 넘겨주기
     */
    function get_blog_category_by_id($categoryid)
    {
        $where_clause = array(
            '_categoryid' => $categoryid
        );
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($where_clause);
        return $this->db->get()->row();
    }

    /*
     * categoryid, isdeprecated를 받아 넘겨받은 isdeprecated값으로 db update
     */
    function change_isdeprecated($categoryid, $isdeprecated)
    {
        try {
            $input_data = array(
                'isdeprecated' => $isdeprecated
            );
            $this->db->where('_categoryid', $categoryid);
            $this->db->update($this->table, $input_data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /*
     * $data를 받아서 category정보 추가하기
     * $data['title'] 이런 정보로 데이터 접근
     */
    function add($data)
    {
        $input_data = array(
            'label' => $data['label'],
            'isdeprecated' => FALSE,
        );

        $this->db->insert($this->table, $input_data);
        return $this->db->insert_id();

    }

    /*
     * $data를 넘겨받아 $data['categoryid']에 맞는 category정보 db update
     */
    function update($data)
    {
        try {
            $input_data = array(
                'isdeprecated' => $data['isdeprecated'],
                'label' => $data['label']
            );
            $this->db->where('_categoryid', $data['categoryid']);
            $this->db->update($this->table, $input_data);
            return true;
        } catch (Exception $e) {
            return false;
        }

    }

    /*
     * $page, $per_page를 넘겨받아 category들을 paging해서 넘겨주기
     */
    function get_items($first_idx, $page, $per_page)
    {
        $where_clause = array(
            '_categoryid >=' => $first_idx,
            'isdeprecated' => false
        );
        $offset = $per_page * ($page - 1);
        return $this->db->get_where($this->table, $where_clause, $per_page, $offset)->result();

    }

    /*
     * 전체 category정보 넘겨주기
     */
    function gets()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result();
    }

    function gets_non_isdeprecated()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(array('isdeprecated' => false));
        return $this->db->get()->result();
    }

}