<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!($this->session->userdata('access') == 2)){
            redirect('user');
        }
    }

    public function index()
    {
        $data = array(
            'title' => 'Point of Sales',
            'author' => 'getto_project',
            'date' => date('d-m-Y H:i:s'),
            'content' => 'Point of Sales',
            'user' => $this->db->get_where('tbl_user', ['userName' => $this->session->userdata('username')])->row_array()
        );
        $this->load->view('templates/user-header', $data);
        $this->load->view('sales/point-of-sales', $data);
        $this->load->view('modal/menu-detail-modal');
        $this->load->view('modal/logout-pos-modal');
        $this->load->view('templates/user-footer');
    }
}
?>