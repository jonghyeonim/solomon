<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notice_category extends CORE_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->__require_admin_login();
        $this->load->model('notice_category_model');
    }

    function index()
    {
        $notice_categorys = $this->notice_category_model->gets();
        $this->__get_views('_NOTICE_CATEGORY/index.php', array('items' => $notice_categorys));
    }

    function create()
    {
        $this->load->model('notice_category_model');
        $this->load->model('user_model');
        $users = $this->user_model->gets();
        $categories = $this->notice_category_model->gets();
        $this->__get_views('_NOTICE_CATEGORY/create.php', array('data' => null, 'categories' => $categories, 'users' => $users));
    }


    function submit()
    {
        $input_data = array(
            'label' => $this->input->post('label')
        );
        $rtv = $this->notice_category_model->add($input_data);

        if ($rtv != null && $rtv > 0) {
            $this->session->set_flashdata('message', '카테고리를 성공적으로 저장하였습니다.');
            redirect('notice_category/index');
        } else {
            $this->session->set_flashdata('message', '카테고리를 작성하는데 오류가 발생했습니다. 개발자에게 문의하세요');
            $this->__get_views('_NOTICE_CATEGORY/create.php', array('data' => $input_data));
        }
    }

    function change_isdeprecated()
    {
        $notice_category_id = $this->input->get('notice_categoryid');
        $isdeprecated = $this->input->get('isdeprecated') == 'true' ? true : false;

        $rtv = $this->notice_category_model->change_isdeprecated($notice_category_id, $isdeprecated);
        if ($rtv) {
            if ($isdeprecated) {
                // $this->session->set_flashdata('message', '게시글을 성공적으로 삭제하였습니다.');
            } else {
                //   $this->session->set_flashdata('message', '게시글을 성공적으로 부활하였습니다.');
            }
            redirect('notice_category/index');
        } else {
            if ($isdeprecated) {
                //   $this->session->set_flashdata('message', '게시글을 삭제하는데 오류가 발생했습니다. 개발자에게 문의하세요.');
            } else {
                //   $this->session->set_flashdata('message', '게시글을 부활하는데 오류가 발생했습니다. 개발자에게 문의하세요.');
            }

            redirect('_NOTICE_CATEGORY/detail?notice_categoryid=' . $notice_category_id);
        }
    }
}
