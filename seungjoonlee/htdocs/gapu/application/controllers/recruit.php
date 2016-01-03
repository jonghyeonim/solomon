<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruit extends CORE_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/recruit/index');
        }
        $this->__get_views('_RECRUIT/index');
    }
}
