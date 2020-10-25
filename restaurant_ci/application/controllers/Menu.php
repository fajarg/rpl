<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{
    var $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->model('CategoryModel');
        if(!($this->session->userdata('access') == 1)){
            redirect('user');
        }else{
            $this->data['user'] = $this->db->get_where('tbl_user', ['userName' => $this->session->userdata('username')])->row_array();
        }
    }
    
    public function index()
    {
        $data = $this->data;
        $data['title'] = 'Menu Data';
        $data['sbactive'] = 'menu-data';
        $data['menu'] = $this->MenuModel->getAllMenu();
        if( $this->input->post('keyword') ) {
            $data['menu'] = $this->MenuModel->cariDataMenu();
        }

        $this->load->view('templates/admin-header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/menu-data', $data);
        $this->load->view('modal/admin/menu-new');
        $this->load->view('modal/admin/logout-modal');
        $this->load->view('templates/admin-footer');
    }

    public function categoryMenu()
    {
        $data = $this->data;
        $data['title'] = 'Category Data';
        $data['sbactive'] = 'category-data';
        $data['category'] = $this->CategoryModel->getAllCategory();
        if( $this->input->post('keyword') ) {
            $data['category'] = $this->CategoryModel->cariDataCategory();
        }

        $this->load->view('templates/admin-header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/menu-category', $data);
        $this->load->view('modal/admin/category-new');
        $this->load->view('modal/admin/delete-modal');
        $this->load->view('modal/admin/info-category-modal', $data);
        $this->load->view('modal/admin/logout-modal');
        $this->load->view('templates/admin-footer');
    }

    public function addCategory() 
    {
        $name = $this->input->post('categoryName');
        if (!empty($this->CategoryModel->getCategoryByName($name))) {
            $this->session->set_flashdata('message-modal', '<small class="c-alert-danger">Nama kategori ini sudah ada. Silahkan ulangi lagi</small>');
            redirect('menu/categoryMenu#modal-new-menu');
        } else {
            $this->CategoryModel->tambahDataCategory();
            $this->session->set_flashdata('message', '<small class="c-alert-create">Data berhasil ditambahkan</small>');
            redirect('menu/categoryMenu');
        }
    }

    public function deleteCategory($id)
    {
        $this->CategoryModel->hapusDataCategory($id);
        $this->session->set_flashdata('message', '<small class="c-alert-create">Data berhasil dihapus</small>');
        redirect('menu/categoryMenu');
    }

    public function detailCategory($id)
    {
        $data = $this->data;
        $data['category'] = $this->CategoryModel->getCategoryById($id);
        redirect('menu/categoryMenu');
    }
}
?>