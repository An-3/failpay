<?php

class Trans_model extends CI_Model {

    function Failpay_model() {
        // Вызов конструктора  
        parent::CI_Model();
    }

    function getData($u_id = false) {
        if (!$u_id) {
            $query = $this->db->get('transactions');
        } else {
            $query = $this->db->query("SELECT * FROM `transactions` WHERE `user_id` = '{$u_id}'");
        }
        return $query->result();
    }

    function saveData(array $data) {
        if (!empty($data)) {
            try {
                if (!$this->db->insert('transactions', $data))
                    throw new Exception;
            } catch (Exception $e) {
                return $e->getMessage();
            }
            return "Thank you!";
        }
        else
            return "Fail!";
    }

    function getUser($user_id) {
        if (!empty($user_id)) {
            try {
                $query = $this->db->query("SELECT * FROM `users` WHERE `id` = '{$user_id}' LIMIT 1");
                if (!$query) throw new Exception;
            } catch (Exception $e) {
                return $e->getMessage();
            }
        } else {
            return false;
        }
        return $query->row();
    }

}

?>