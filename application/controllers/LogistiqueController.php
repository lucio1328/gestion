<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Session $session
 */
class LogistiqueController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Logistique_model');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }    
}

?>