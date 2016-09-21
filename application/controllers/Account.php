<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends Controller {
	public function __construct() {
		parent::__construct();

	}
	public function profile()
	{
		$data['cur_title'] = array('','','','','','','active','','','');

		$this->load->database();
        $this->load->model('account_model');

        $data['data']= $this->account_model->getUserprofile();

		$this->load->view('header');
		$this->load->view('nav', $data);
		$this->load->view('sidebar_menu', $data);
		$this->load->view('profile', $data);
		$this->load->view('footer');
	}
	public  function updateuser()
	 {
	  $this->load->library('form_validation');
      $this->load->database();
      $this->load->model('account_model');

      if ($this->security->xss_clean($this->input->post('subimit')) == 'cancel')
      		redirect('Dashboard/index');
      $data['user_mail']=$this->security->xss_clean($this->input->post('email'));
      $data['user_tel']=$this->security->xss_clean($this->input->post('phone'));
      $data['user_enable']=$this->security->xss_clean($this->input->post('enable'));
      #echo $data['user_mail'];
      
	  $this->account_model->updateuser($data);

	  redirect('Account/profile');

	}
}
