<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    var $data;

    public function __construct()
    {
        parent::__construct();
        if(!($this->session->userdata('access') == 1)){
            redirect('user');
        }else{
            $this->data['user'] = $this->db->get_where('tbl_user', ['userName' => $this->session->userdata('username')])->row_array();
        }
    }

    public function index()
    {       
        $data = $this->data;
        $data['title'] = 'Dashboard';
        $data['sbactive'] = 'dashboard';

        $this->load->view('templates/admin-header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('modal/admin/logout-modal');
        $this->load->view('templates/admin-footer');
    }

}

?>