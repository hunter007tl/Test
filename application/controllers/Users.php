<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
		function __construct() {
		parent::__construct();
			$this->load->model('base_model');
			// check session login
			if($this->session->userdata('login_status')!="already_login"){
			redirect(site_url().'cpanel-admin?alert=not_loged_in');
		}
	}

	public function list_view(){
		$this->db->order_by('user_list', 'DESC');
		$data['users'] = $this->base_model->get_data('users')->result();
		$this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/users/list_view', $data);
        $this->load->view('admin/footer',$data);
	}

	public function input_form(){
		$data['user_id']=$this->base_model->get_user_id();
		$this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/users/input', $data);
        $this->load->view('admin/footer',$data);
	}

	public function save(){
    	$user_id = $this->input->post('user_id');
		$user_name = $this->input->post('user_name');
		$user_password = $this->input->post('user_password');
		$user_level = $this->input->post('user_level');
		$user_status = $this->input->post('user_status');
		$user_slug = $this->input->post('slug');
		$data = array(
			'user_id' => $user_id,
			'user_name' => $user_name,
			'user_password' => md5($user_password),
			'user_level' => $user_level,
			'user_status' => $user_status,
			'user_slug' => $user_slug
		);
			$this->base_model->insert_data($data,'users');
			log_helper("Add User Record",$user_id."-".$user_name."-".$user_level."-".$user_status);
			$this->session->set_flashdata('message', '<div id="snoAlertBox" class="alert alert-success alert-dismissible" data-alert="alert"><h5 class="text-left"><i class="icon fa fa-check"></i> Create Record Success.</h5></div>');
	        redirect(site_url('users-list'));
	}

	public function delete($user_id){
		$where = array(
		'user_id' => $user_id
		);
		$this->base_model->delete_data($where,'users');
		log_helper("Delete User Record",$user_id);
		$this->session->set_flashdata('message', '<div id="snoAlertBox" class="alert alert-success alert-dismissible" data-alert="alert"><h5 class="text-left"><i class="icon fa fa-check"></i> Delete Record Success.</h5></div>');
		redirect(site_url('users-list'));
	}
	public function edit_form($user_slug){
		$where = array('user_slug' => $user_slug);
		$data['users'] = $this->base_model->edit_data($where,'users')->result();
		$this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/users/edit', $data);
        $this->load->view('admin/footer',$data);
	}
	public function update(){
		date_default_timezone_set('Asia/Tokyo');

		if ( !empty($this->input->post('user_password'))){

    	$user_id = $this->input->post('user_id');
		$user_name = $this->input->post('user_name');
		$user_password = $this->input->post('user_password');
		$user_level = $this->input->post('user_level');
		$user_status = $this->input->post('user_status');
		$user_slug = $this->input->post('slug');
		$data = array(
			'user_id' => $user_id,
			'user_name' => $user_name,
			'user_password' => md5($user_password),
			'user_level' => $user_level,
			'user_status' => $user_status,
			'user_slug' => $user_slug
		);
		$where = array(
		'user_id' => $user_id
		);
		$this->base_model->update_data($where,$data,'users');
		log_helper("Update User Record",$user_id."-".$user_name."-".$user_level."-".$user_status);
        $this->session->set_flashdata('message', '<div id="snoAlertBox" class="alert alert-success alert-dismissible" data-alert="alert"><h5 class="text-left"><i class="icon fa fa-check"></i> Update Record Success.</h5></div>');
		redirect(site_url('users-list'));
		}else{
			$user_id = $this->input->post('user_id');
			$user_name = $this->input->post('user_name');
			$user_level = $this->input->post('user_level');
			$user_status = $this->input->post('user_status');
			$user_slug = $this->input->post('slug');
			$data = array(
				'user_id' => $user_id,
				'user_name' => $user_name,
				'user_level' => $user_level,
				'user_status' => $user_status,
				'user_slug' => $user_slug
			);
			$where = array(
			'user_id' => $user_id
			);
			$this->base_model->update_data($where,$data,'users');
			log_helper("Update User Record",$user_id."-".$user_name."-".$user_level."-".$user_status);
	        $this->session->set_flashdata('message', '<div id="snoAlertBox" class="alert alert-success alert-dismissible" data-alert="alert"><h5 class="text-left"><i class="icon fa fa-check"></i> Update Record Success.</h5></div>');
			redirect(site_url('users-list'));
    	}
    }

    public function profile_form($user_slug){
    	$where = array('user_slug' => $user_slug);
		$data['users'] = $this->base_model->edit_data($where,'users')->result();
		$this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/users/profile', $data);
        $this->load->view('admin/footer',$data);
	}

	public function update_profile(){
		date_default_timezone_set('Asia/Tokyo');

		$user_id = $this->input->post('user_id');
		$user_name = $this->input->post('user_name');
		$user_slug = $this->input->post('slug');
		$data = array(
			'user_id' => $user_id,
			'user_name' => $user_name,
			'user_slug' => $user_slug
		);
		$where = array(
		'user_id' => $user_id
		);
		$this->base_model->update_data($where,$data,'users');
		log_helper("Update User Record",$user_id."-".$user_name);
        $this->session->set_flashdata('message', '<div id="snoAlertBox" class="alert alert-success alert-dismissible" data-alert="alert"><h5 class="text-left"><i class="icon fa fa-check"></i> Update Record Success.</h5></div>');
		redirect(site_url('users-my-profile/'.$user_slug));
	}

	public function update_password(){
		date_default_timezone_set('Asia/Tokyo');

		$user_id = $this->input->post('user_id');
		$user_password = $this->input->post('user_password');
		$user_slug = $this->input->post('slug');
		$data = array(
			'user_id' => $user_id,
			'user_password' => md5($user_password)
		);
		$where = array(
		'user_id' => $user_id
		);
		$this->base_model->update_data($where,$data,'users');
		log_helper("Change User Password","");
        $this->session->set_flashdata('message', '<div id="snoAlertBox" class="alert alert-success alert-dismissible" data-alert="alert"><h5 class="text-left"><i class="icon fa fa-check"></i> Update Record Success.</h5></div>');
		redirect(site_url('users-my-profile/'.$user_slug));
	}

}
