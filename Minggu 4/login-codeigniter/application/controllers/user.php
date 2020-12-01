<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Model','model_model');
        $this->load->library('form_validation');
    }



    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');        
        
        $data['title'] = 'Login';
        
        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('template/header', $data);
            $this->load->view('user/login');
            $this->load->view('template/footer');
        }
        else
        { 
            if ($user = $this->model_model->get_user_login($username, $password))
            {   
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('role',$user['role']);
                $this->session->set_userdata('is_logged_in', true);
                
                $this->session->set_flashdata('msg_success','Login Berhasil!');
                redirect('news');                
            }
            else
            {
                $this->session->set_flashdata('msg_error','Login gagal!');
                
                $currentClass = $this->router->fetch_class(); 
                $currentAction = $this->router->fetch_method(); 
                
                redirect("$currentClass/$currentAction");
               
            }
        }
    }

    
    
}
?>