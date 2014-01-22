<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$query = $this->db->query("SELECT SUM(`amount_money`) as `total` FROM `transactions`;");
		$result = $query->result();
		$current = $result[0];
		$data['total'] = $current->total;
		
		
		$query = $this->db->query("SELECT `t`.`id`, `t`.`user_id`, `t`.`late_date`, `t`.`type_id`, `t`.`amount_money`,
								`u`.`username`, `tt`.`name`
							FROM `transactions` as `t`, `users` as `u`, `trans_type` as `tt`
							WHERE `t`.`user_id` = `u`.`id` and `t`.`type_id`=`tt`.`id`
							GROUP BY `t`.`id` ORDER BY `t`.`id` DESC LIMIT 10");
		$data['num_res'] = $query->num_rows();
		if ($data['num_res'] > 0) {
			$result = $query->result();
			for($i = 0; $i < $data['num_res']; $i ++){
				$current = $result[$i];
		
				$data['transactions'][$i]['id'] = $current->id;
				$data['transactions'][$i]['user'] = $current->username;
				$late_date = explode(" ", $current->late_date);
				$late_time = substr($late_date[1], 0, 5);
				$late_date = $late_date[0]; // Парсить дату!
				$data['transactions'][$i]['date'] = $late_date." ".$late_time;
				$data['transactions'][$i]['type'] = $current->name;
				$data['transactions'][$i]['money'] = $current->amount_money;
			}
		}
		
		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */