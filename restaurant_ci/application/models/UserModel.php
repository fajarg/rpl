<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model{

    private $table = "tbl_user";

    public function validationUser($user, $pass){
        $this->db->where("userName = '$user'");
        $this->db->where('userPass', md5($pass));
        $query = $this->db->get($table);
        return $query->$row_array();
    }
}
?>