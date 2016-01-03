<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CORE_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        if ($this->config->item('is_mobile') == "mobile") {
          redirect('m/home/index');
        }

        $this->__get_views('_HOME/index');
    }

    function test()
    {
        var_dump(site_url());
        var_dump(base_url());

    }
}
