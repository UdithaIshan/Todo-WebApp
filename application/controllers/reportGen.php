<?php 
    class ReportGen extends CI_Controller {

        public function __construct() {
            parent::__construct();
            if( !file_exists('application/views/pages/report.php')) {
                show_404();
            }
            $this->load->model('db_model');
        }
        

        function generate() {
            //$result['data'] = $this->db_model->display_data();
            $report['log'] = $this->db_model->display_query_log();
            $this->load->view('pages/report', $report);
        }

    }

?>
