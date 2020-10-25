<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuModel extends CI_Model{

    private $table = "tbl_menu";

    public function getAllMenu()
    {
        return $this->db->get("tbl_menu")->result_array();
    }










    
    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $this->db->insert($table, $data);
    }
    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete($table, ['id' => $id]);
    }
    public function getMahasiswaById($id)
    {
        return $this->db->get_where($table, ['id' => $id])->row_array();
    }
    public function ubahDataMahasiswa()
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
    public function cariDataMahasiswa()
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