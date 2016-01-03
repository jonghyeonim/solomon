<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notice extends CORE_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('notice_model');
    }

    function get_notices_by_userid()
    {
        $first_idx = $this->input->get('first_idx');
        $page = $this->input->get('page');
        $per_page = $this->input->get('per_page');
        $userid = $this->input->get('userid');

        $notices = $this->notice_model->get_notices_by_userid($first_idx, $page, $per_page, $userid);
        echo json_encode($notices, JSON_PRETTY_PRINT);
    }

    function get_notice_by_noticeid()
    {
        $noticeid = $this->input->get('noticeid');

        $notice = $this->notice_model->get_notice_by_noticeid($noticeid);

        echo json_encode($notice, JSON_PRETTY_PRINT);

    }

    function change_isdeprecated()
    {
        $noticeid = $this->input->post('noticeid');
        $isdeprecated = filter_var($this->input->post('isdeprecated'), FILTER_VALIDATE_BOOLEAN);
        echo $this->notice_model->change_isdeprecated($noticeid, $isdeprecated);
    }

    function add()
    {

        $data = array(
            'title' => $this->input->post('title'),
            'summary' => $this->input->post('summary'),
            'content' => $this->input->post('content'),
            'for_userid' => $this->input->post('for_userid'),
            'for_categoryid' => $this->input->post('for_categoryid')
        );

        $id = $this->notice_model->add($data);
        echo json_encode($id, JSON_PRETTY_PRINT);
    }

    function update()
    {
        $data = array(
            'noticeid' => $this->input->post('noticeid'),
            'title' => $this->input->post('title'),
            'summary' => $this->input->post('summary'),
            'content' => $this->input->post('content'),
            'for_userid' => $this->input->post('for_userid'),
            'for_categoryid' => $this->input->post('for_categoryid'),
            'isdeprecated' => filter_var($this->input->post('isdeprecated'), FILTER_VALIDATE_BOOLEAN)
        );

        $id = $this->notice_model->update($data);
        echo json_encode($id, JSON_PRETTY_PRINT);
    }

    function get_items()
    {
        $userid = $this->session->userdata('userid');
        if(!$userid){
            $userid = -1;
        }

        $first_idx = $this->input->get('first_idx');
        $page = $this->input->get('page');
        $per_page = $this->input->get('per_page');
        $categoryid = $this->input->get('categoryid');
        $view = $this->input->get('view');

        if ($page === false || $per_page === false) {
            $page = 1;
            $per_page = 12;
        }

        $items = $this->notice_model->get_items($first_idx, $page, $per_page, $userid, $categoryid, $view);
        $total_count = $this->notice_model->get_all_count();

        $last_page = ceil($total_count / $per_page);

        if ($items->total_count == 0) {
            echo json_encode($this->load->view('_PARTIAL/no_item', '', true));
        } else {
            $view_data = array('items' => $items->return_body, 'page' => $page, 'per_page' => $per_page, 'last_page' => $last_page);
            $passe_data = array (
                'data' => $this->load->view('_PARTIAL/notice_item', $view_data, true),
                'page' => $page,
                'per_page' => $per_page,
                'total_count' => $total_count,
                'last_page' => $last_page,
                'first_count' => $items->first_count,
                'second_count' => $items->second_count,
                'third_count' => $items->third_count,
                'fourth_count' => $items->fourth_count,
            );

            echo json_encode($passe_data);
        }
    }

    function gets()
    {
        $notices = $this->notice_model->gets();
        echo json_encode($notices, JSON_PRETTY_PRINT);
    }

    function increase_hit_by_noticeid()
    {
        $noticeid = $this->input->get('noticeid');
        echo $this->notice_model->increase_hit_by_noticeid($noticeid);

    }

    function increase_like_by_noticeid()
    {
        $this->load->model('wishlist_model');
        $userid = $this->input->get('userid');
        $noticeid = $this->input->get('noticeid');

        $data = array(
            'userid'=> $userid,
            'noticeid' => $noticeid
        );

        $rtv = $this->wishlist_model->add($data);

        if ($rtv) {
            $rtv = $this->notice_model->increase_like_by_noticeid($data);

            echo json_encode($rtv, JSON_PRETTY_PRINT);
        } else {
            echo json_encode(FALSE, JSON_PRETTY_PRINT);
        }
    }

    function decrease_like_by_noticeid()
    {
        $this->load->model('wishlist_model');
        $userid = $this->input->get('userid');
        $noticeid = $this->input->get('noticeid');

        $data = array (
            'userid' => $userid,
            'noticeid' => $noticeid
        );

        $rtv = $this->wishlist_model->delete($data);

        if ($rtv) {
            $rtv = $this->notice_model->decrease_like_by_noticeid($data);

            echo json_encode($rtv, JSON_PRETTY_PRINT);
        } else {
            echo json_encode(FALSE, JSON_PRETTY_PRINT);
        }
    }

    function get_high_like_notices()
    {
        $count = $this->input->get('count');
        $notices = $this->notice_model->get_high_like_notices($count);
        echo json_encode($notices, JSON_PRETTY_PRINT);
    }

    /*
     * main에 hot item 4개 들고오기
     */
    function get_hot_items()
    {
        $userid = $this->session->userdata('userid');
        if(!$userid){
            $userid = -1;
        }
        $notices = $this->notice_model->get_hot_items($userid);

        $data = $this->load->view('_PARTIAL/notice_hot_item', array('items'=>$notices), true);
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    /*
     * main에 special item 8개 들고오기
     */
    function get_special_items()
    {
        $userid = $this->session->userdata('userid');
        if(!$userid){
            $userid = -1;
        }

        $notices = $this->notice_model->get_special_items($userid);
        $data = $this->load->view('_PARTIAL/notice_special_item', array('items'=>$notices), true);

        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    function m_get_special_items()
    {
        $userid = $this->session->userdata('userid');
        if(!$userid){
            $userid = -1;
        }

        $notices = $this->notice_model->get_special_items($userid);
        $data = $this->load->view('_PARTIAL/m_notice_special_item', array('items'=>$notices), true);

        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    /*
     * random으로 20개 들고오기
     */
    function get_random_items()
    { $userid = $this->session->userdata('userid');
        if(!$userid){
            $userid = -1;
        }
        $notices = $this->notice_model->get_random_items($userid);
        $data = $this->load->view('_PARTIAL/notice_random_item', array('items'=>$notices), true);

        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    function upload_image()
    {
        $file = $_FILES['image'];
        $type = $_POST['type'];
        $rtv = array('state' => FALSE, 'content' => "");

        $root_path = $_SERVER["DOCUMENT_ROOT"] . "/upload/" . $type . '/';
        $dir_name = $_POST['dir_name'];
        $dir_path = $root_path . $dir_name;

        if (!is_dir($dir_path)) {
            mkdir($dir_path, 0777, true);
        }

        $file_error = $file['error'];
        if ($file_error === 0) {
            $upload_file = $dir_path . "/" . basename($file['name']);

            if (is_dir($dir_path)) {
                if (file_exists($upload_file)) {
                    $return_url = '/upload/' . $type . '/' . $dir_name . '/' . basename($file['name']);
                    $rtv['state'] = TRUE;
                    $rtv['content'] = $return_url;
                } else {
                    if (move_uploaded_file($file['tmp_name'], $upload_file)) {
                        $return_url = '/upload/' . $type . '/' . $dir_name . '/' . basename($file['name']);
                        $rtv['state'] = TRUE;
                        $rtv['content'] = $return_url;
                    } else {
                        $rtv['content'] = "사진을 저장하는데 오류가 발생했습니다. 010-6233-8509 개발자에게 연락주세요.";
                    }
                }
            } else {
                $rtv['content'] = "폴더가 존재하지 않습니다. 010-6233-8509 개발자에게 연락주세요.";
            }

        } else if ($file_error === 2) {
            $rtv['content'] = "사진이 너무 큽니다.";
        } else if ($file_error === 3) {
            $rtv['content'] = "사진 중 일부만 전송되었습니다.";
        } else if ($file_error === 4) {
            $rtv['content'] = "사진을 설정해주세요.";
        } else {
            $rtv['content'] = "사진을 저장하는데 예상하지 못한 오류가 발생했습니다. 010-6233-8509 개발자에게 연락주세요.";
        }
        echo json_encode($rtv, JSON_PRETTY_PRINT);
    }

    function test()
    {
        $total_count = $this->notice_model->get_all_count();

        echo json_encode($total_count, JSON_PRETTY_PRINT);
    }
}