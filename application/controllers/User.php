<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('User_model');
		}
		public function index(){
			
			// $post_data = $_POST;
			// print_r($post_data);
			// // die();
		
			// $data= array();
			// $this->load->view('Home/home', $data);
		}
		public function save_user(){
			$email = $this->input->post('email');
			$this->User_model->save_user_email($email);
		}
	}
 ?>