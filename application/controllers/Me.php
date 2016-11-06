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
			$this->load->model('User_model');
			$data = array();
			$user_id = $this->uri->segment(3);
			$log = $this->User_model->get_log($user_id);
			$data['log'] = $log;
			$word_typed = 0;
			$count = 0;
			$count_cpm = 0;
			$count_accuracy = 0;
			foreach ($log as $key) {
				if ($key['type'] == 'practice'){
					$word_typed += $key['title_id'];
					$count++;
					$count_cpm += $key['cpm'];
					$count_accuracy += $key['accuracy'];
				}
			}
			
			
			if ($count > 0) {
				$avg_cpm = round($count_cpm / $count, 2);
				$avg_accuracy = round($count_accuracy / $count, 2);
			}
			else {
				$avg_cpm = 0;
				$avg_accuracy = 0;
			}
			
			$data['word_typed'] = $word_typed;
			$data['avg_cpm'] = $avg_cpm;
			$data['avg_accuracy'] = $avg_accuracy;
			$this->load->view('Me/info_view', $data);	
		}
	}
 ?>