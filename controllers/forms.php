<?php
class Forms extends CI_Controller{
		public function form1_show(){
			return $this->load->view('form1_view');
		}

		public function form1_submit(){
			$this->load->helper('form');

			$data['user']=$this->input->post('username');
			$data['pass']=$this->input->post('password');

			return $this->load->view('form1_submitted',$data);
		}
}
?>