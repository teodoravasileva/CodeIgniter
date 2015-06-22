<?php
class Look extends CI_Controller{
	public function demo1(){
		$data ['dynamic_view']='add_player';
		$this->load->library('form_validation');
		$this-> load->view('templates/main',$data);
	}

	public function demo2(){
		$data ['dynamic_view']='form3';
		$this->load->library('form_validation');
		$this-> load->view('templates/main',$data);
	}

	public function demo3(){
		$data ['dynamic_view']='form_cars';
		$this->load->library('form_validation');
		$this-> load->view('templates/main',$data);
	}

	public function form_action(){
			$this->load->helper('form');
			$options = array(
                  '2011'  => '2011',
                  '2012'    => '2012',
                  '2013'   => '2013',
                  '2014' => '2014',
                );

		}
	}
?>