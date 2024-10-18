<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    if (!function_exists('insertion_besoin')) {
        function insertion_besoin($date,$besoin,$quantite) {
            
            $CI =& get_instance();
            
             
            $CI->load->database(); 
            
             
            $CI->db->where('email', $email);
            $CI->db->where('mdp', $password);
            $query = $CI->db->get('utilisateur');
            $find_user = $query->num_rows();
    
            if ($find_user > 0) {
                
                // $CI->session->set_flashdata('successfull', 'You are logged');
                 
                redirect('Auth/main');
            } else {
                 
                // $CI->session->set_flashdata('warning', 'Incorrect authentication');
                $data['erreur']="Verifier vos identifiant";
                redirect('Auth/',$data);
            }
        }
    }
?>