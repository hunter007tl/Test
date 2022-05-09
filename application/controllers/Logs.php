<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends CI_Controller {
		function __construct() {
		parent::__construct();
			$this->load->model('base_model');
			// check session login
			if($this->session->userdata('login_status')!="already_login"){
			redirect(site_url().'cpanel-admin?alert=not_loged_in');
		}
	}

	public function logs_view(){
		$data['logs'] = $this->db->query("SELECT * FROM log_activity,users where log_user=user_id order by log_code DESC")->result();
		$this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/logs/logs_view', $data);
        $this->load->view('admin/footer',$data);
	}

	public function delete_all(){
		$id = $_POST['id'];
        $this->base_model->delete_all($id);
		$this->session->set_flashdata('message', '<div id="snoAlertBox" class="alert alert-success alert-dismissible" data-alert="alert"><h5 class="text-left"><i class="icon fa fa-check"></i> Delete Record Success.</h5></div>');
		redirect(site_url('log-activity'));
	}

}
