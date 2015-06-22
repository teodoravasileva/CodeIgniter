<?php
class uploads extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		
	}

	public function show_upload(){
		$data['error']='';
		$this->load->view('show_upload_form',$data);

	}

	public function save_file()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
		$config['max_size']	= '50';
		

		$this->load->library('upload', $config);

		if (  $this->upload->do_upload())
		{
			$data['file_info']= $this ->upload->data();
			$this->load->view('upload_success', $data);
		}
		else
		{
			$data['errors'] = $this->upload->display_errors();

			$this->load->view('show_upload', $data);
		}
	}
}
?>