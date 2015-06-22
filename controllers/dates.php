<?php
class dates extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('date');
		}
		
		public function show_dates()
		{
			echo now() . '</br>';
			$now = now();
			echo unix_to_human($now, TRUE, 'eu') . '</br>';	

			$post_date ='1179621429';
			echo unix_to_human($post_date, TRUE, 'eu'). '</br>';

			echo timespan($post_date, $now);
				
			echo timezones('UP10');
		}
	
	}
	?>