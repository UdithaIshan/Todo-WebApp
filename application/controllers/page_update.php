<?php

class Page_update extends CI_Controller{

	public function __construct() {
		parent::__construct();
        $this->load->model('db_model');
    }
    
    function deleteData($id) {
		$id = $this->uri->segment(3);
        $this->db_model->delete_data($id);
        $this->load->helper('url');
        redirect($uri = 'app', $method = 'auto', $code = NULL);
	}
}

?>