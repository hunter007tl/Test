<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}

	public function login_process(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
		'user_name' => $email,
		'user_password' => md5($password),
		'user_status' => 'Active',
		);
		$this->load->model('base_model');
		// check compability from login to table user
		$cek = $this->base_model->cek_login('users',$where)->num_rows();
			// check if true
			if($cek > 0){
				// retrieve user data that is logged in
				$data = $this->base_model->cek_login('users',$where)->row();
				// make session to user that login succesfully
				$data_session = array(
				'user_id' => $data->user_id,
				'user_name' => $data->user_name,
				'user_level' => $data->user_level,
				'user_slug' => $data->user_slug,
				'login_status' => 'already_login'
				);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('message', '<div id="snoAlertBox" class="alert alert-success alert-dismissible" data-alert="alert"><h5 class="text-left"><i class="icon fa fa-check"></i> Login Successfull.</h5></div>');
				// redirect to page admin
				redirect(site_url('admin-dashboard'));
			}else{
			redirect(site_url().'cpanel-admin?alert=failed');
		}
	}

	public function request_password(){
		$this->load->view('request');
	}

}
