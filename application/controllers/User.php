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
			$user_id = $this->input->post('user_id');
			$exist_user = $this->User_model->exist_user($user_id);
			if (!$exist_user){
				$this->User_model->save_user_id($user_id);	
			}
		}
		public function save_log(){
			$data = array();
			$data['user_id'] = $this->input->post('user_id');
			$data['type'] = $this->input->post('type');
			$data['title'] = $this->input->post('title');
			$data['title_id'] = $this->input->post('title_id');
			$data['time'] = $this->input->post('time');
			$data['accuracy'] = $this->input->post('accuracy');
			$data['cpm'] = $this->input->post('cpm');

			$this->User_model->save_log($data);
		}
	}
 ?>