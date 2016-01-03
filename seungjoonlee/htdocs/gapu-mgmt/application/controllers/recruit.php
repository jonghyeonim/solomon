<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Recruit extends CORE_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->__require_admin_login();
        $this->load->model('recruit_model');
    }

    function index()
    {
        $recruits = $this->recruit_model->gets();
        $this->__get_views('_RECRUIT/index.php', array('items' => $recruits));
    }

    function create()
    {
        $this->load->model('recruit_category_model');
        $categories = $this->recruit_category_model->gets_non_isdeprecated();
        $this->__get_views('_RECRUIT/create.php', array('data' => null, 'categories' => $categories));
    }

    function detail()
    {
        $recruit_id = $this->input->get('recruitid');
        $recruit = $this->recruit_model->get_recruit_by_id($recruit_id);

        $this->__get_views('_RECRUIT/detail.php', array('item' => $recruit));
    }

    function update()
    {
        $this->load->model('recruit_category_model');
        $recruit_id = $this->input->get('recruitid');

        $recruit = $this->recruit_model->get_RECRUIT_by_id($recruit_id);
        $categories = $this->recruit_category_model->gets_non_isdeprecated();

        $this->__get_views('_RECRUIT/update.php', array('item' => $recruit, 'categories' => $categories));
    }

    function change_isdeprecated()
    {
        $recruitid = $this->input->get('recruitid');
        $isdeprecated = $this->input->get('isdeprecated') == 'true' ? true : false;

        $rtv = $this->recruit_model->change_isdeprecated($recruitid, $isdeprecated);
        if ($rtv > 0) {
            if ($isdeprecated) {
                $this->session->set_flashdata('message', '채용정보를 성공적으로 삭제하였습니다.');
            } else {
                $this->session->set_flashdata('message', '채용정보를 성공적으로 부활하였습니다.');
            }

            redirect('recruit/index');
        } else {
            if ($isdeprecated) {
                $this->session->set_flashdata('message', '채용정보를 삭제하는데 오류가 발생했습니다. 개발자에게 문의하세요.');
            } else {
                $this->session->set_flashdata('message', '채용정보를 부활하는데 오류가 발생했습니다. 개발자에게 문의하세요.');
            }

            redirect('recruit/index');
        }
    }
}
