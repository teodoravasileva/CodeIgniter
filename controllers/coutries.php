<?php
class Second extends CI_Controller{
	public function real(){
		$data['title']="Where do you live?";
	    $data['content']="What is your name?";
	    $this->load->view('news',$data);
	}
}
?>