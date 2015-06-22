<?php
class Params1 extends CI_Controller{
		public function Para($one , $two="default value"){
			$data['p']=$one;
			$data['b']=$two;
			$this->load->view('param',$data);
		}

		
}
?>