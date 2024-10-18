<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Session $session
 */
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Besoin_model');
        $this->load->model('Departement_model');
    }

    public function index()
    {
        $this->load->view('auth/login');
    } 

    public function login_form(){
        // Charger le helper d'authentification
        $this->load->helper('auth');

        if (empty($_POST['email']) || empty($_POST['password'])) {
            throw new Exception("Veuillez saisir votre identifiant et mot de passe.");
        }
        
        // Appeler la fonction d'authentification du helper
        login_user($_POST['email'],$_POST['password']);
    }

    public function main(){
        $data['besoins']=$this->Besoin_model->get_all();
        $this->load->view('pages/besoin',$data);
    }

    public function accueil() {
        $user = $this->session->userdata('user');
        
        if (!empty($user)) {
            $departement = $this->Departement_model->get_by_id($user['id']);
            if($departement->nom == 'admin' || $departement->nom == 'finance' || $departement->nom == 'logistique' || $departement->nom == 'achat'){
                $data['departement_name'] = $departement->nom;
                $view = 'modele_'.$departement->nom;
                $this->load->view('pages/'.$departement->nom.'/'.$view,$data);
            }
            else {
                $data['departement_name'] = 'autres';
                $this->load->view('pages/autres/modele_autres',$data);
            }
        } 
        else {
            redirect('auth/login');
        }
    }
}
