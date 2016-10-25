<?php if (!defined('BASEPATH')){exit('No direct script access allowed');}
	
	class User_model extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		function save_user_email($email)
		{
			$data = array(
				'email' => $email
				);
			$this->db->insert('user',$data);
		}
	}
?>