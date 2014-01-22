<?php

class Trans extends CI_Controller {

    function index() {
        $this->load->model('trans_model');
        if ($this->uri->segment(2) === FALSE) {
            $data['content'] = $this->trans_model->getData();
        }else{
            $user_id = $this->uri->segment(2);
            $data['content'] = $this->trans_model->getData($user_id);
        }
        $data['page_title'] = "List of transaction";
        $this->load->view('trans_view', $data);
    }

    function transaction() {
        $data['page_title'] = "Save transaction";
        $this->load->model('trans_model');
        $user_id = $this->uri->segment(2);
        $data = array();
        $amount_money = ($this->uri->segment(3) !== FALSE) ? $this->uri->segment(3) : 0;

        if( $this->trans_model->getUser($user_id) ){
            if( $_SERVER['REMOTE_ADDR'] == '172.16.5.177' ){ 
                $data['user_id'] = $user_id;
                $data['amount_money'] = $amount_money;
                $data['amount_time'] = 0;
                $data['late_date'] = date('Y-m-d H:i:s');
                $data['type_id'] = 1;
                $data['tariff_id'] = 1;
                $data['content'] = $this->trans_model->saveData($data);
            }else{$data['content'] = 'You don`t have permission';  }
        }else{
            $data['content'] = 'No such user'; 
        }
        $this->load->view('transSave_view', $data);
    }
    


}

?>