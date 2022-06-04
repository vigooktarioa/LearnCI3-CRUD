<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index()
	{
		$queryAllMahasiswa = $this->M_Mahasiswa->getDataMahasiswa();
		// echo "<pre>";
		// print_r($queryAllMahasiswa);
		// echo "</pre>";
		
		$DATA = array(
			'queryAllMhs' => $queryAllMahasiswa);

		$this->load->view('home');
	}
	
	public function halaman_tambah() {
		$this->load->view('tambah_mhs');
	}

	public function halaman_edit(){
		$this->load->view('edit_mhs');
	}
}
