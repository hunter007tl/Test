<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
			$this->load->model('base_model');
			// check session login
			if($this->session->userdata('login_status')!="already_login"){
			redirect(site_url().'cpanel-admin?alert=not_loged_in');
		}
	}

	public function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
	}

	public function logout() {		
		$this->session->sess_destroy();
		redirect(site_url().'cpanel-admin?alert=logout');
	}

}
