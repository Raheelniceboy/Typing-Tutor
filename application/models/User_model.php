<?php if (!defined('BASEPATH')){exit('No direct script access allowed');}
	
	class User_model extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}

		function exist_user($user_id)
		{
			$this->db->select("*");
			$this->db->from("user");
			$this->db->where("user_id", $user_id);
			$query = $this->db->get();
			$row = $query->row_array();
			if ($row == null){
				return false;
			}
			return true;
		}

		function save_user_id($user_id)
		{
			$data = array(
				'user_id' => $user_id
				);
			$this->db->insert('user',$data);
		}

		function save_log($data)
		{
			$this->db->set('date', 'NOW()', FALSE);
			$this->db->insert('log', $data);
		}
		function get_log($user_id)
		{
			$this->db->select('*');
			$this->db->from('log');
			$this->db->where('user_id', $user_id);
			$query = $this->db->get();
			return $query->result_array();
		}
	}
?>