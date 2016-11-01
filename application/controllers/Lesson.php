<?php
	header('Access-Control-Allow-Origin: *'); 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Lesson extends CI_Controller{
		public function index(){
			
			// die();
			
			$data= array();

			$this->load->view('Lesson/index_view', $data);
		}
		public function detail(){
			$this->load->model('Lesson_model');
			$id = $this->uri->segment(3);
			$src = $this->Lesson_model->get_src($id);

			// read file
			$file = fopen($src, "r");
			$text = fgets($file);
			fclose($file);

			$data = array();
			$data['text'] = $text;
			$this->load->view('Lesson/detail_view', $data);
		}

	}
 ?>