<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      $this->load->model(array('Model_mahasiswa'));

    }

  public function index()
	{   
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Model_mahasiswa->getAllMahasiswa();

        if($this->input->post('keyword')){
          $data['mahasiswa'] = $this->Model_mahasiswa->cariDataMahasiswa();
        }
        $this->load->view('template/header',$data);
        $this->load->view('Mahasiswa/index',$data);
        $this->load->view('template/footer');
  }
  
   public function tambah()
        {
        $data['judul'] = 'Form Tambah Data Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        
        if($this->form_validation->run() == FALSE){
         
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/tambah');
        $this->load->view('template/footer'); 
        }
        else{
          $this->Model_mahasiswa->tambahDataMahasiswa();
          $this->session->set_flashdata('flash','Ditambahkan');
          redirect('Mahasiswa');
        }
        }

        public function ubah($id)
        {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['mahasiswa'] = $this->Model_mahasiswa->getMahasiswaById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        
        if($this->form_validation->run() == FALSE){
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/ubah',$data);
        $this->load->view('template/footer'); 
        }
        else{
          $this->Model_mahasiswa->ubahDataMahasiswa();
          $this->session->set_flashdata('flash','Diubah');
          redirect('Mahasiswa');
        }
        }

        public function detail($id){
           $data['judul'] = 'Detail Data Mahasiswa';
           $data['mahasiswa'] = $this->Model_mahasiswa->getMahasiswaById($id);
           $this->load->view('template/header',$data);
           $this->load->view('mahasiswa/detail',$data);
           $this->load->view('template/footer');
        }

        public function hapus($id)
        {
          $this->Model_mahasiswa->hapusDataMahasiswa($id);
          $this->session->set_flashdata('flash','Dihapus');
          redirect('Mahasiswa');
        }
}