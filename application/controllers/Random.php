<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Random extends CI_Controller{
		public function index(){
			
			// die();
		
			$data= array();
			$this->load->view('Games/random_view', $data);
		}
	}
 ?>