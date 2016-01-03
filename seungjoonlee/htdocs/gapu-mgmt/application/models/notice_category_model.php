<?php

class Notice_category_model extends CI_Model
{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'gapu_notice_category';
    }

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

    function add($data)
    {
        $input_data = array(
            'label' => $data['label'],
            'isdeprecated' => FALSE,
        );

        $this->db->insert($this->table, $input_data);
        return $this->db->insert_id();

    }

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