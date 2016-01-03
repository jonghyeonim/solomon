<?php

class User_model extends CI_Model
{

    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'bt_user';
    }

    function gets()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result();
    }

    function gets_admin()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(array('is_admin' => true));
        return $this->db->get()->result();
    }

    function gets_non_isdeprecated()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(array('isdeprecated' => false));
        return $this->db->get()->result();
    }

    function logined($user)
    {
        $user->logined = date("Y-m-d H:i:sa");
        $this->db->update($this->table, $user, array('_userid' => $user->_userid));
    }

    function get_user_by_email($option)
    {
        return $this->db->get_where($this->table, array('email' => $option['email']))->row();
    }

    function get_user_by_id($userid)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(array('_userid' => $userid));
        $this->db->join('userinfo', 'userinfo.for_userid = user._userid');
        return $this->db->get()->row();
    }

    function change_admin($user_id, $is_admin)
    {
        try {
            $data = array(
                'is_admin' => $is_admin
            );

            $this->db->where('_userid', $user_id);
            $this->db->update($this->table, $data);

            return $this->db->affected_rows();
        } catch (Exception $e) {
            return false;
        }
    }

    function change_isdeprecated($user_id, $isdeprecated)
    {
        try {
            $data = array(
                'isdeprecated' => $isdeprecated
            );

            $this->db->where('_userid', $user_id);
            $this->db->update($this->table, $data);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    function add($data)
    {
        $input_data = array(
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'is_admin' => FALSE,
            'created' => date("Y-m-d"),
            'isdeprecated' => FALSE,
        );

        $this->db->insert($this->table, $input_data);
        $result = $this->db->insert_id();

        return $result;
    }

    function update($data)
    {
        try {
            $input_data = array(
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => $data['password'],
                'profile_uri' => $data['profile_uri'],
                'is_admin'=>$data['is_admin'],
                'isdeprecated'=>$data['isdeprecated']
            );

            $this->db->where('_userid', $data['userid']);
            $this->db->update($this->table, $input_data);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}