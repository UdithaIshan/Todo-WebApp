<?php

class Pages extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('db_model');
	}
	
	function view($page = 'app')
	{
		if( !file_exists('application/views/pages/'.$page.'.php')) {
			show_404();
		}
	
		$this->load->library('form_validation');

		//Validating Form
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result['data'] = $this->db_model->display_data();
			$this->load->view('pages/app', $result);
		} 
		else {
			$data = array(
				'id' => $this->input->post('id'),
				'description' => $this->input->post('description'),
				'date' => $this->input->post('date')
			);
			//Transfering data to db_Model
			$this->db_model->form_insert($data);

			//Loading View
			$result['data'] = $this->db_model->display_data();
			$this->load->view('pages/app', $result);
		}
	}
}
?>