<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruit extends CORE_Controller {

    function __construct () {
        parent::__construct();
        $this->load->model('recruit_model');
    }

    function get_items()
    {
        $page = $this->input->get('page');
        $per_page = $this->input->get('per_page');

        if (!$page || !$per_page) {
            $page = 1;
            $per_page = 10;
        }
        $items = $this->recruit_model->get_items($page, $per_page);
        $total_count = $this->recruit_model->get_all_count();
        $last_page = ceil($total_count / $per_page);

        if (count($items) == 0) {
            $passe_data = array (
                'data' => $this->load->view('_PARTIAL/no_item', null, true),
            );

            echo json_encode($passe_data, JSON_PRETTY_PRINT);
        } else {
            $passe_data = array (
                'data' => $this->load->view('_PARTIAL/recruit_item', array('items' => $items), true),
                'total_count' => $total_count,
                'last_page' => $last_page,
                'page' => $page,
                'per_page' => $per_page
            );

            echo json_encode($passe_data, JSON_PRETTY_PRINT);
        }
    }
}
