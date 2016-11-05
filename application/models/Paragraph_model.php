<?php if (!defined('BASEPATH')){exit('No direct script access allowed');}
	
	class Paragraph_model extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		function get_src($length){
			$this->db->select("src");
			$this->db->from("paragraph");
			$this->db->where("length", $length);
			$query = $this->db->get();
			$row = $query->row_array();
			return $row['src'];
		}
	}
?>