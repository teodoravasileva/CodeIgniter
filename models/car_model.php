<?php
class Car_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}

	public function get_all_cars(){
		$query=$this->db->get('automobile');
		return $query->result_array();
	}

	public function get_one_car($car){
		$this->db->from ('automobile');
		$this->db->where('ID', $ID);
		$query=$this->db->get();
		return $query->row_array();
	}
	public function add_car(){
		$car=array(
		'car_brand' => $this->input->post('car_brand'),
		'year' => $this->input->post('year'),
		'price' => $this->input->post('price'),
		'max_speed' => $this->input->post('max_speed'),
			);
		return $this->db->insert('automobile',$car);
	}

	public function update_car(){		 
		$car=array(
		'car_brand' => $this->input->post('car_brand'),
		'year' => $this->input->post('year'),
		'price' => $this->input->post('price'),
		'max_speed' => $this->input->post('max_speed'),
			);
		$this->db->where('ID', $ID);		
		$this->db->update('automobile', $car);		
	}
}
?>