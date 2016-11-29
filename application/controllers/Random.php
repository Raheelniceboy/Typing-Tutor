<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Random extends CI_Controller{
		public function index(){
			
			// die();
			$this->load->model('User_model');
			$data= array();
			$data['top'] = $this->User_model->get_top_player('Random');
			
			// $data['t'] = '1';
			// print_r($data['top']);
			// print_r($data['top'][0]) ;
			// echo $data['top'][0]['user_name'];
			// echo $data['top'][0]['point'];
			// echo count($data['top']);
			// die();
			$this->load->view('Games /random_view', $data);
		}
	}
 ?>