<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CORE_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/game/sub1');
        }

        redirect('game/sub1');
    }

    // 마우스트랩
    function sub1()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/game/sub1');
        }
        $this->__get_views('_GAME/sub1');
    }

    // 우편왕
    function sub2()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/game/sub2');
        }
        $this->__get_views('_GAME/sub2');
    }

    // 우편왕 for kakao
    function sub3()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/game/sub3');
        }
        $this->__get_views('_GAME/sub3');
    }
}
