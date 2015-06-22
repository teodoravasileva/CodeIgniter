<?php
class Players_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}

	public function get_all_players(){
		$query=$this->db->get('players');
		return $query->result_array();
	}

	public function get_one_player($player){
		$this->db->from ('players');
		$this->db->where('firstName', $player);
		$query=$this->db->get();
		return $query->row_array();
	}
	public function add_player(){
		$player=array(
		'firstName' => $this->input->post('firstName'),
		'lastName' => $this->input->post('lasttName'),
		'age' => $this->input->post('age'),
		'position' => $this->input->post('position'),
		'country' => $this->input->post('country'),
		'number' => $this->input->post('number'),
		'salary' => $this->input->post('salary'),
		'points' => $this->input->post('points'),
			);
		return $this->db->insert('players',$player);
	}
}
?>