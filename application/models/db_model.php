<?php class Db_model extends CI_Model {

      function __construct() {
        parent::__construct();
      }
        
      function form_insert($data){
        if($data['id'] == '') {
          $this->db->insert('data', $data);
        }
        // Inserting in Table(students) of Database(college)
        else {
          $this->db->replace('data', $data);
        }
      }

      function display_data() {
        $query = $this->db->query("select * from data");
        return $query->result();
      }

      function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('data');
      }

      function update($id, $description, $date) {
        $query = $this->db->query("update data set description='$description', date='$date' where id='$id'");
      }

}

?>