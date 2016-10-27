<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Demo extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('file');
		}
		public function index()
		{
			$string = read_file(base_url().'text/demo.txt');
			$data = array();
			$data['text'] = $string;
			$this->load->view('Demo/index_view',$data);
 		}
	}
 ?>