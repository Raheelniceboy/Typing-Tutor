<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Me extends CI_Controller{
		public function index(){
			
			// die();
			// $data= array();
			// $id = $this->uri->segment(2);
			// echo $id;
			// // $this->load->view('Me/index_view', $data);
		}
		public function info(){
			$data = array();
			$id = $this->uri->segment(3);
			$this->load->view('Me/info_view', $data);	
		}
	}
 ?>