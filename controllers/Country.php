<?php
class Country extends CI_Controller{
	public function countries(){
		$data['country'] = array('Italy'=>'290 000', 'Macedonia'=>'20 000', 'Greece'=>'150 000', 'Spain'=>'300 000');
	    $this->load->view('arrays',$data);
	}

	public function countries2(){
		$data['country'] = array('Italy'=>'290 000', 'Macedonia'=>'20 000', 'Greece'=>'150 000', 'Spain'=>'300 000');
	    $this->load->view('arrays2',$data);
	}
}
?>