<?php
class string extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('string');
		}
		
		public function show_string()
		{
			echo random_string('alnum',8) . '</br>';
			
		}
	
	}
	?>