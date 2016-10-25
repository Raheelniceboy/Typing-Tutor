<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller{
		public function index(){
			
			// die();
		
			$data= array();
			$this->load->view('Home/index_view', $data);
		}
	}
 ?>