<?php
class CORE_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();

        if(!$this->input->is_cli_request())
            $this->load->library('session');

        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
    }

    function __get_views($viewStr, $data = null) {
        if (strpos($viewStr, 'AUTH')) {
            $this->load->view('_LAYOUT/auth_header.php');
            $this->load->view($viewStr);
            $this->load->view('_LAYOUT/auth_footer.php');
        } else {
            $this->load->view('_LAYOUT/header.php');

            $this->load->view('_LAYOUT/navbar.php');

            if ($data != null) {
                $this->load->view($viewStr, $data);
            } else {
                $this->load->view($viewStr);
            }

            $this->load->view('_LAYOUT/footer.php');
        }
    }

    function __get_partial_view($viewStr, $data = null, $is_value = false) {
        if ($data != null) {
            $this->load->view($viewStr, $data, $is_value);
        } else {
            $this->load->view($viewStr);
        }
    }


    function __require_login($return_url = "") {
        // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션
        if(!$this->session->userdata('is_login')){
            if ($return_url == "") {
                redirect('/auth/login');
            }
            redirect('/auth/login?returnURL='.rawurlencode($return_url));
        }
    }

    function __require_admin_login($return_url = "") {
        // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션
        if(!$this->session->userdata('is_login')){
            if ($return_url == "") {
                redirect('/auth/login');
            }
            redirect('/auth/login?returnURL='.rawurlencode($return_url));
        }

        if (!$this->session->userdata('is_admin')) {
            if ($return_url == "") {
                redirect('/Home/index');
            }
            redirect(rawurlencode($return_url));
        }
    }

    function __is_logined($return_url = "") {
        // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션
        if($this->session->userdata('is_login')){
            if ($return_url == "") {
                redirect('/Home/index');
            }
            redirect($return_url);
        }
    }





















    /* handler */
    function handle_date ($date) {
        // 00/00/2015 -> 2015-00-00
        $arr_date = explode('/', $date);
        return $arr_date[2].'-'.$arr_date[1].'-'.$arr_date[0];
    }
    function hadle_short_date($date) {
        // 2015-08-03 00:00: -> 2015-08-03
        return substr($date, 0, 10);
    }
}