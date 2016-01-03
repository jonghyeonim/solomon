<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intro extends CORE_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/intro/index');
        }
        $this->__get_views('_INTRO/index');
    }

    function history()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/intro/history');
        }
        $this->__get_views('_INTRO/history');
    }
}
