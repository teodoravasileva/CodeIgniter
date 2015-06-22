<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function show_login(){
		$this->load->library('form_validation');
		$this->load->view('login_view');
	}

	public function form_submitted(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username','Име','required');
			$this->form_validation->set_rules('email','имейл','required');
			$this->form_validation->set_rules('password','парола','required','callback_pass_check');
			$this->form_validation->set_rules('password2','повтори парола','required','callback_pass_check');

			if($this->form_validation->run()===FALSE){
				$this->show_login();
			}else{
				$this->login_model->add_user();
				echo"Successfully inserted car in DB!";
			}
			
			
	}

	public function pass_check(){
		if($this->input->post('password')== $this->input->post('password2')){
				echo"Successfully registered!";
				return $this->login_model->add_user();
				
			}else{
				echo"password doesn't match!";
				return $this->load->view('Login_view');
				
			}
	}


}
?>