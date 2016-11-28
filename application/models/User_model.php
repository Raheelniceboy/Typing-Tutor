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
		// Log for typing
		function save_log($data)
		{
			$this->db->set('date', 'NOW()', FALSE);
			$this->db->insert('log', $data);
		}
		// Log for game
		function save_game_log($data)
		{
			$this->db->insert('log_game', $data);
		}
		function get_log($user_id)
		{
			$this->db->select('*');
			$this->db->from('log');
			$this->db->where('user_id', $user_id);
			$this->db->order_by("log_id", "desc");
			$query = $this->db->get();
			return $query->result_array();
		}
		function get_top_player($game_name)
		{
			$this->db->select('user_id, point, user_name');
			$this->db->from('log_game');
			if ($game_name = "Bubbles"){
				$this->db->order_by('point',"asc");	
			}
			$this->db->order_by('point',"desc");
			$this->db->where('game_name', $game_name);
			$query = $this->db->get();
			$list = $query->result_array();
			return $list;
		}
	}
?>