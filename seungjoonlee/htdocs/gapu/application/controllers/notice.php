<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notice extends CORE_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/notice/index');
        }
        $this->__get_views('_NOTICE/index');
    }
}
