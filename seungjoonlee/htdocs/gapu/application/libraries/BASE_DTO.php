<?php
class BASE_DTO {
    public $result, $return_body, $total_count, $first_count, $second_count, $third_count, $fourth_count;

    function set_value($data, $is_card) {
        $first_count = 0;
        $second_count = 0;
        $third_count = 0 ;
        $fourth_count = 0;

        if ($is_card) {
            $items = array( 'first' => array(), 'second' => array(), 'third' => array(), 'fourth' => array());
            for($i = 0; $i < count($data); $i++) {
                if ($i % 4 == 1) {
                    array_push($items['second'], ($data[$i]));
                    $second_count++;
                } else if ($i % 4 == 2) {
                    array_push($items['third'], ($data[$i]));
                    $third_count++;
                } else if ($i % 4 == 3) {
                    array_push($items['fourth'], ($data[$i]));
                    $fourth_count++;
                } else if ($i % 4 == 0) {
                    array_push($items['first'], ($data[$i]));
                    $first_count++;
                }

            }
        }

        $this->result = TRUE;
        $this->return_body = $is_card ? $items : $data;
        $this->total_count = count($data);
        $this->first_count = $first_count;
        $this->second_count = $second_count;
        $this->third_count = $third_count;
        $this->fourth_count = $fourth_count;
    }
}     
