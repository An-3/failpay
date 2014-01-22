<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function index()
	{
		echo ""; // Контроллер АЯКСовых обращений.
	}

	public function get_all_transactions () {
		$this->load->helper('date');
		
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
				$data['transactions'][$i]['date'] = mysql_to_human($current->late_date, true, false);
				$data['transactions'][$i]['type'] = $current->name;
				$data['transactions'][$i]['money'] = $current->amount_money;
			}
		}
		
		$this->load->view('ajax_transactions_view', $data);
	}
	
	public function get_total_summ () {
		$query = $this->db->query("SELECT SUM(`amount_money`) as `total` FROM `transactions`;");
		$result = $query->result();
		$current = $result[0];
		echo (int) $current->total;
	}
}
?>