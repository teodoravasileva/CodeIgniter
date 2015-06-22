<?php
class Forma extends CI_Controller{
		public function form(){
			return $this->load->view('form3');
		}

		public function form_action(){
			$this->load->helper('form');

			$data['phone']=$this->input->get('phone');
			$data['model']=$this->input->get('model');

			return $this->load->view('form3',$data);
		}
}
?>