<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CORE_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        if ($this->config->item('is_mobile') == "mobile") {
            redirect('m/contact/index');
        }
        $this->__get_views('_CONTACT/index');
    }

    function submit_mail()
    {
        $data = array('name' => $this->input->post('name'),
            'number' => $this->input->post('number'),
            'email' => $this->input->post('email'),
            'content' => $this->input->post('content'));

        var_dump($data);
    }

    function test()
    {
        $receiver = 'ladmusician.kim@gmail.com';    // 받는 사람
        $subject = "SOMETHING GOODS에서의 새로운 비밀번호를 보내드립니다."; // 제목
        $content =  "<p>이름 : </p>" + name
                    + "<p>이메일 : </p>" + email;
        $headers = "From: " . strip_tags('ceo@goqual.com') . "\r\n";
        $headers .= "Reply-To: ". strip_tags('ceo@goqual.com') . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // 보낸시각, 보낸메세지는 mysql에 저장한다.
        mail($receiver, $subject, $content, $headers);
    }
}
