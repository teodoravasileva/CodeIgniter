<?php
class Reg extends CI_Controller{
		public function form(){
			return $this->load->view('show');
		}

		public function form_submitted(){
			$this->load->helper('form');

			$data['user']=$this ->input->post('username');
			$data['a']=$this ->input->post('age');

			if($this->input->post('age')<18){
				return $this->load->view('not_allowed');
			}
			else{
				return $this->load->view('allowed');
			}

					
		}
}
?>