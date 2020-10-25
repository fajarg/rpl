<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {

        if ($this->session->userdata('access') == 1) {
            redirect('admin');
        }elseif($this->session->userdata('access') == 2){
            redirect('sales');            
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');
        
        if($this->form_validation->run() == false){
            $data = array(
                'title' => 'log_in_form',
                'author' => 'getto_project',
                'date' => date('d-m-Y H:i:s'),
                'content' => 'Login Form'
            );
            $this->load->view('templates/login-header',$data);
            $this->load->view('login-form',$data);
            $this->load->view('templates/login-footer');
        }else{
            $this->login_validation();
        }
    }

    public function login_validation()
    {   
        $user = $this->input->post('username');
        $pass = $this->input->post('pass');
        $pass = md5($pass);
        
        $user_get = $this->db->get_where('tbl_user',['userName' => $user])->row_array();
        if($user_get){
            if($pass == $user_get['userPass']){
                $data = [
                    'username' => $user_get['userName'],
                    'access' => $user_get['userAccess']
                ];
                $this->session->set_userdata($data);
                if($user_get['userAccess'] == 1){
                    redirect('admin');
                }else{
                    redirect('sales');
                }
            } else {
                $this->session->set_flashdata('message', '<small class="alert-login">Wrong password!</small>');
                redirect('user');
            }
        }else{
            $this->session->set_flashdata('message', '<small class="alert-login">Username is not registered!</small>');
            redirect('user');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('access');
        $this->session->set_flashdata('message', '<small class="alert-logout">You have been logged out!</small>');
        redirect('user');
    }

    public function tambah_data()
    {
        $data = array(
            'title' => 'asdadsd',
            'author' => 'candra'
        );
        $this->load->view('default',$data);
    }
}

?>