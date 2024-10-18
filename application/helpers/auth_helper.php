<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('login_user')) {
    function login_user($email,$password) {
        
        $CI =& get_instance();
        
         
        $CI->load->database(); 
         
        $CI->db->where('email', $email);
        $CI->db->where('mdp', $password);
        $query = $CI->db->get('utilisateur');
        $admin = $query->row_array();
        
        if (!empty($admin)) {
            $CI->session->set_userdata('user', $admin);

            redirect('admin/accueil');
        } 
        else {
            $CI->session->set_flashdata('error', 'Vérifiez vos identifiants.');
            redirect('auth/index');
        }
    }
}

?>
