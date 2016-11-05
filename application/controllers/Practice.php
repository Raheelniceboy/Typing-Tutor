<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Practice extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('Practice/index_view');
	}

	public function paragraph()
	{
		$length = $this->uri->segment(3);
		$this->load->model('Paragraph_model');
		$src = $this->Paragraph_model->get_src($length);
		$pos = rand(1,30);

		// read file
			$file = fopen($src, "r");
			for ($i = 1; $i < $pos; $i++){
				fgets($file);
			}
			$text = fgets($file);
			fclose($file);
		$data = array();
		$data['text'] = $text;
		$this->load->view('Practice/paragraph_view', $data);
	}
}