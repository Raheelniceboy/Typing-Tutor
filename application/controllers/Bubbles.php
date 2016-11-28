<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Bubbles extends CI_Controller{
		public function index(){
			
			// die();
			$this->load->model("User_model");
			$data= array();
			$data['top'] = $this->User_model->get_top_player('Bubbles');
			// print_r($data['top']);
			// die();
			$this->load->view('Games/bubbles_view', $data);
		}
	}
 ?>