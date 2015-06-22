<?php
class login_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}

	public function get_all_users(){
		$query=$this->db->get('users');
		return $query->result_array();
	}

	public function get_one_user($user){
		$this->db->from ('users');
		$this->db->where('username', $user);
		$query=$this->db->get();
		return $query->row_array();
	}
	public function add_user(){
		$user=array(
		'username' => $this->input->post('username'),
		'email' => $this->input->post('email'),
		'password' => $this->input->post('password'),
			);
		return $this->db->insert('users',$user);
	}
}

?>