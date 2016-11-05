<?php if (!defined('BASEPATH')){exit('No direct script access allowed');}
	
	class Lesson_model extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		function get_src($id){
			$this->db->select("src");
			$this->db->from("lesson");
			$this->db->where("id", $id);
			$query = $this->db->get();
			$row = $query->row_array();
			return $row['src'];
		}
		function get_lesson($id){
			$this->db->select("*");
			$this->db->from("lesson");
			$this->db->where("id", $id);
			$query = $this->db->get();
			$row = $query->row_array();
			return $row;
		}
	}
?>