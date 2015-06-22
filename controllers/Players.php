<?php
class Players extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Players_model');
	}

	public function show_all_players(){
		$data['all_players'] =$this->Players_model->get_all_players();
		$this->load->view('show_players',$data);
	}

	public function show_one_player($player="III"){
		$data['one_palyer']=$this->Players_model->get_one_player($player);
		$this->load-view('show_one_player',$data);
	}
}