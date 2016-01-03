<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CORE_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('notice_model');
        $this->load->model('recruit_model');
    }

    function upload_image_for_summernote ()
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

    /* upload */
    function upload_item ()
    {
        $input_data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'for_categoryid' => $this->input->post('category'),
            'for_userid' => $this->session->userdata('userid'),
        );

        $dir_name = $this->input->post('dir_name');
        $key_code = $this->input->post('dirkeycode');

        $rtv = null;

        if ($key_code == "notice") {
            $rtv = $this->notice_model->add($input_data);
        } else if ($key_code == "recruit") {
            $rtv = $this->recruit_model->add($input_data);
        }

        if ($rtv != null && $rtv > 0) {
            $rtv_change_folder_name = $this->change_folder_name($rtv, $input_data['content'], $dir_name, $key_code);

            if ($rtv_change_folder_name > 0) {
                $this->session->set_flashdata('message', '글을 성공적으로 저장하였습니다.');

                if ($key_code == "notice") {
                    redirect('notice/detail?noticeid='.$rtv);
                } else if ($key_code == "recruit") {
                    redirect('recruit/detail?recruitid='.$rtv);
                }
            } else {
                $this->session->set_flashdata('message', '글작성하는데 오류가 발생했습니다. 개발자에게 문의하세요');

                if ($key_code == "notice") {
                    redirect('notice/create');
                } else if ($key_code == "recruit") {
                    redirect('recruit/create');
                }
            }
        } else {
            $this->session->set_flashdata('message', '글작성하는데 오류가 발생했습니다. 개발자에게 문의하세요');

            if ($key_code == "notice") {
                redirect('notice/create');
            } else if ($key_code == "recruit") {
                redirect('recruit/create');
            }
        }
    }
    function change_folder_name($itemid, $content, $dir_name, $key_code)
    {
        $root_path = $_SERVER["DOCUMENT_ROOT"] . "/upload/" . $key_code . "/";
        $origin_path = $root_path . $dir_name;
        $new_path = $root_path . $itemid . '_' . $dir_name;

        // 만약 본문에 이미지 upload가 없어서 folder가 생기지 않았으면 만들기
        if (!is_dir($origin_path)) {
            mkdir($new_path);
        } else {
            // folder명에 blogid 붙이기
            rename($origin_path, $new_path);
        }

        $rtv = null;

        if ($key_code == "notice") {
            $rtv = $this->notice_model->change_folder_name($itemid, $content, $dir_name);
        } else if ($key_code == "recruit") {
            $rtv = $this->recruit_model->change_folder_name($itemid, $content, $dir_name);
        }

        return $rtv;
    }


    /* update */
    function update_item()
    {
        $input_data = array(
            'itemid' => $this->input->post('itemid'),
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'for_categoryid' => $this->input->post('category'),
            'for_userid' => $this->session->userdata('userid'),
        );
        $key_code = $this->input->post('dirkeycode');

        $rtv = -1;
        if ($key_code == "notice") {
            $rtv = $this->notice_model->update($input_data);
        } else if ($key_code == "recruit") {
            $rtv = $this->recruit_model->update($input_data);
        }

        if ($rtv > 0) {
            $this->session->set_flashdata('message', '글을 성공적으로 저장하였습니다.');
            if ($key_code == "notice") {
                redirect('notice/detail?noticeid='.$input_data['itemid']);
            } else if ($key_code == "recruit") {
                redirect('recruit/detail?recruitid='.$input_data['itemid']);
            }
        } else {
            $this->session->set_flashdata('message', '글작성하는데 오류가 발생했습니다. 개발자에게 문의하세요');

            if ($key_code == "notice") {
                redirect('notice/update?noticeid='.$input_data['itemid']);
            } else if ($key_code == "recruit") {
                redirect('recruit/update?recruitid='.$input_data['itemid']);
            }
        }
    }
}