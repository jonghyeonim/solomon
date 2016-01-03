<?php
class Mail_model extends CI_Model
{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'gapu_mail';
    }

    function add($data)
    {
        $input_data = array(
            'username' => $data['username'],
            'email' => $data['email'],
            'content' => $data['content'],
            'created' => date("Y-m-d"),
        );

        $this->db->insert('user', $input_data);
        $userid = $this->db->insert_id();

        if ($userid > 0) {
            $input_data = array(
                'for_userid' => $userid,
                'facebook' => "",
                'instagram' => "",
                'pinterest' => "",
                'blog' => "",
                'address' => "",
                'created' => date("Y-m-d"),
                'isdeprecated' => FALSE,
            );

            $this->db->insert('userinfo', $input_data);
            return $this->db->insert_id();
        } else {
            return 0;
        }

        return $result;
    }
}