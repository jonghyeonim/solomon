<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CORE_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        redirect('m/game/sub1');
    }

    // 마우스트랩
    function sub1()
    {
        $this->__get_m_views('m/_GAME/sub1');
    }

    // 우편왕
    function sub2()
    {
        $this->__get_m_views('m/_GAME/sub2');
    }

    // 우편왕 for kakao
    function sub3()
    {
        $this->__get_m_views('m/_GAME/sub3');
    }
}
