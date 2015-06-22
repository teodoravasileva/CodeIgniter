<?php
class Add_car_bd extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('car_model');
		
	}

	public function show_car(){
		$this->load->library('form_validation');
		$this->load->view('add_car');

	}

	public function update_car(){
		$this->load->library('form_validation');
		$this->load->view('update_car');
	}

	public function show_all_cars(){
		$data['all_cars']=$this->car_model->get_all_cars();
		$this->load->view('show_cars',$data);
	}

	public function add_car(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			
			$this->form_validation->set_rules('car_brand','Марка','required');
			$this->form_validation->set_rules('year','година','required');
			$this->form_validation->set_rules('price','цена','required');
			$this->form_validation->set_rules('max_speed','максимална скорост','required');
			
			if($this->form_validation->run()===FALSE){
				$this->show_car();
			}else{
				$this->car_model->add_car();
				echo"Successfully inserted car in DB!";
			}
		}

	public function updated_car(){

			$this->load->helper('form');
			$this->load->library('form_validation');


			
			$this->form_validation->set_rules('car_brand','Марка','required');
			$this->form_validation->set_rules('year','година','required');
			$this->form_validation->set_rules('price','цена','required');
			$this->form_validation->set_rules('max_speed','максимална скорост','required');
			
			if($this->form_validation->run()===FALSE){
				$this->update_car();
			}else{
				$this->car_model->update_car();
				echo"Successfully updated record in DB!";
			}

	}
}

?>