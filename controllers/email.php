<?php
class email extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('email');
		}
		
		public function validation()
		{
			$this->load->helper('email');

			if (valid_email('tedy_v@mail.bg'))
		{
    		echo 'email is valid';
		}
			else
		{
    		echo 'email is not valid';
		}
			
		}
	
	}
	?>