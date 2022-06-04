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

		$this->load->view('home', $DATA);
	}
	
	public function halaman_tambah() {
		$this->load->view('tambah_mhs');
	}

	public function halaman_edit($nim){
		$queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($nim);
		echo "<pre>";
		print_r($queryMahasiswaDetail);
		echo "</pre>";
		$this->load->view('edit_mhs');
	}

	public function fungsiTambah(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$ArrInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan
		);
		
		$this->M_Mahasiswa->insertDataMahasiswa($ArrInsert);
		redirect(base_url(''));
	}
}
