<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notice extends CORE_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        $this->__get_m_views('m/_NOTICE/index');
    }
}
