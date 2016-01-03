<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notice extends CORE_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->__require_admin_login();
        $this->load->model('notice_model');
    }

    function index()
    {
        $notices = $this->notice_model->gets();
        $this->__get_views('_NOTICE/index.php', array('items' => $notices));
    }

    function create()
    {
        $this->load->model('notice_category_model');
        $categories = $this->notice_category_model->gets_non_isdeprecated();
        $this->__get_views('_NOTICE/create.php', array('data' => null, 'categories' => $categories));
    }

    function detail()
    {
        $notice_id = $this->input->get('noticeid');
        $notice = $this->notice_model->get_notice_by_id($notice_id);

        $this->__get_views('_NOTICE/detail.php', array('item' => $notice));
    }

    function update()
    {
        $this->load->model('notice_category_model');
        $notice_id = $this->input->get('noticeid');

        $notice = $this->notice_model->get_notice_by_id($notice_id);
        $categories = $this->notice_category_model->gets_non_isdeprecated();

        $this->__get_views('_NOTICE/update.php', array('item' => $notice, 'categories' => $categories));
    }

    function change_isdeprecated()
    {
        $noticeid = $this->input->get('noticeid');
        $isdeprecated = $this->input->get('isdeprecated') == 'true' ? true : false;

        $rtv = $this->notice_model->change_isdeprecated($noticeid, $isdeprecated);
        if ($rtv > 0) {
            if ($isdeprecated) {
                $this->session->set_flashdata('message', '공지사항을 성공적으로 삭제하였습니다.');
            } else {
                $this->session->set_flashdata('message', '공지사항을 성공적으로 부활하였습니다.');
            }

            redirect('notice/index');
        } else {
            if ($isdeprecated) {
                $this->session->set_flashdata('message', '공지사항을 삭제하는데 오류가 발생했습니다. 개발자에게 문의하세요.');
            } else {
                $this->session->set_flashdata('message', '공지사항을 부활하는데 오류가 발생했습니다. 개발자에게 문의하세요.');
            }

            redirect('notice/index');
        }
    }
}
