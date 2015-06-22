<?php
class Add_player_bd extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('players_model');
		
	}

	public function show(){
		$this->load->library('form_validation');
		$this->load->view('add_player');

	}

	public function add_player(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			
			$this->form_validation->set_rules('lastName','фамилия','required');
			$this->form_validation->set_rules('age','години','required');
			$this->form_validation->set_rules('position','позиция','required');
			$this->form_validation->set_rules('country','държава','required');
			$this->form_validation->set_rules('number','номер','required');
			$this->form_validation->set_rules('salary','заплата','required');
			$this->form_validation->set_rules('points','точки','required');
			
			if($this->form_validation->run()===FALSE){
				$this->show();
			}else{
				$this->players_model->add_player();
				echo"Successfully inserted player";
			}
		}
}
?>