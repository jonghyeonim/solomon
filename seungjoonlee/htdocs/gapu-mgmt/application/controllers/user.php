<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CORE_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->__require_admin_login();
        $this->load->model('user_model');
    }

    function index()
    {
        $users = $this->user_model->gets();
        $this->__get_views('_USER/index.php', array('items' => $users));
    }

    function create()
    {
        $this->load->model('blog_category_model');
        $this->load->model('user_model');
        $users = $this->user_model->gets();
        $categories = $this->blog_category_model->gets();
        $this->__get_views('_BLOG/create.php', array('data' => null, 'categories' => $categories, 'users' => $users));
    }

    function change_admin()
    {
        $userid = $this->input->get('userid');
        $isadmin = $this->input->get('isadmin') == 'true' ? true : false;

        if (!$userid) {
            $this->session->set_flashdata('message', '페이지를 로드하는데 오류가 발생했습니다.');
        } else {
            $rtv = $this->user_model->change_admin($userid, $isadmin);

            if ($rtv == 1) {
                $this->session->set_flashdata('message', '관리가 권한 변경이 성공했습니다.');
            } else {
                $this->session->set_flashdata('message', '관리가 권한 변경에 오류가 발생했습니다.');
            }
        }
        redirect('/user/index');
    }

    function change_isdeprecated()
    {
        $userid = $this->input->get('userid');
        $isdeprecated = $this->input->get('isdeprecated') == 'true' ? true : false;

        $rtv = $this->user_model->change_isdeprecated($userid, $isdeprecated);
        if ($rtv) {
            if ($isdeprecated) {
                $this->session->set_flashdata('message', '사용자를 성공적으로 삭제하였습니다.');
            } else {
                $this->session->set_flashdata('message', '사용자를 성공적으로 부활하였습니다.');
            }

            redirect('user/index');
        } else {
            if ($isdeprecated) {
                $this->session->set_flashdata('message', '사용자를 삭제하는데 오류가 발생했습니다. 개발자에게 문의하세요.');
            } else {
                $this->session->set_flashdata('message', '사용자를 부활하는데 오류가 발생했습니다. 개발자에게 문의하세요.');
            }

            redirect('user/detail?userid='.$userid);
        }
    }
}
