<?php
class Utilisateur_model extends MY_Model {
    protected $table = 'utilisateur';

    public function __construct() {
        parent::__construct();
    }

     
    public function get_user_by_email($email) {
        $query = $this->db->get_where('utilisateur', array('email' => $email));
        return $query->row_array();  
    }
}

?>
