<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model{

    private $table;

    public function __construct(){
        parent::__construct();
        $this->table = "tbl_menu_category";
    }

    public function getAllCategory()
    {
        return $this->db->get($this->table)->result_array();
    }
    
    public function getCategoryByName($name)
    {
        return $this->db->get_where($this->table, ['categoryName' => $name])->row_array();
    }

    public function tambahDataCategory()
    {
        $data = [
            "categoryName" => $this->input->post('categoryName', true),
            "categoryNote" => $this->input->post('categoryNote', true),
        ];
        $this->db->insert($this->table, $data);
    }


    public function hapusDataCategory($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete($this->table, ['categoryID' => $id]);
    }



    public function getCategoryById($id)
    {
        return $this->db->get_where($table, ['id' => $id])->row_array();
    }
    public function ubahDataCategory()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($table, $data);
    }
    public function cariDataCategory()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get($table)->result_array();
    }
}
?>