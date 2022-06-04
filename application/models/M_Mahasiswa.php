<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model{
    function getDataMahasiswa(){
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
}