<?php
class MY_Model extends CI_Model {

    protected $table;  

    public function __construct() {
        parent::__construct();
    }

     
    public function get_all() {
        return $this->db->get($this->table)->result();
    }

     
    public function get_by_id($id) {
        return $this->db->where('id', $id)->get($this->table)->row();
    }
 
    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete($this->table);
    }
}
