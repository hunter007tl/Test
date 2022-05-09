<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {

	public function index(){
		$this->load->view('visitor/header');
		$this->load->view('visitor/content');
		$this->load->view('visitor/footer');
	}

	public function error_404(){
		$this->load->view('visitor/header');
		$this->load->view('visitor/error_404');
		$this->load->view('visitor/footer');
	}

}
