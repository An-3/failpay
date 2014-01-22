<?php

class Trans extends CI_Controller {

    function index() {
        $this->load->model('trans_model');
        if ($this->uri->segment(3) !== FALSE) {
            $data['content'] = $this->trans_model->getData();
        }else{
            $data['content'] = $this->trans_model->getData();
        }
        $data['page_title'] = "List of transaction";
        $this->load->view('trans_view', $data);
    }

    function transaction() {
        $data['page_title'] = "Save transaction";
        $user_id = $this->uri->segment(2);
        $amount_money = ($this->uri->segment(3) !== FALSE) ? $this->uri->segment(3) : 0;
        $this->load->view('trans_view', $data);
    }
    


}

?>