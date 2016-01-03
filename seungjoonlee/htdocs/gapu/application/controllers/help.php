<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends CORE_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/help/index');
        }
        $this->__get_views('_HELP/index');
    }
}
