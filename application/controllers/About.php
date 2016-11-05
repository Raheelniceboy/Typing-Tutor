<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class About extends CI_Controller{
		public function index(){
			
			// die();
		
			$data= array();
			$this->load->view('About/index_view', $data);
		}
	}
 ?>