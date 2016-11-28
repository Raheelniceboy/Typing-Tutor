<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Bubbles extends CI_Controller{
		public function index(){
			
			// die();
		
			$data= array();
			$this->load->view('Games/bubbles_view', $data);
		}
	}
 ?>