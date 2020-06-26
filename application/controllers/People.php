<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      $this->load->model(array('Model_people'));

    }

  public function index()
	{   
        $data['judul'] = 'List People';
        $data['people'] = $this->Model_people->getAllPeople();
        

        $config['total_rows'] = $this->Model_people->countAllPeople();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['people'] = $this->Model_people->getPeople($config['per_page'], $data['start']);

if($this->input->post('keywordpeople')){
          $data['people'] = $this->Model_people->cariDataPeople();
        }

        $this->load->view('template/header',$data);
        $this->load->view('People/index',$data);
        $this->load->view('template/footer');
  }
  
   public function tambah()
        {
        $data['judul'] = 'Form Tambah Data People';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        
        if($this->form_validation->run() == FALSE){
         
        $this->load->view('template/header',$data);
        $this->load->view('people/tambah');
        $this->load->view('template/footer'); 
        }
        else{
          $this->Model_people->tambahDataPeople();
          $this->session->set_flashdata('flash','Ditambahkan');
          redirect('People');
        }
        }

        public function ubah($id)
        {
        $data['judul'] = 'Form Ubah Data People';
        $data['people'] = $this->Model_people->getPeopleById($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        
        if($this->form_validation->run() == FALSE){
        $this->load->view('template/header',$data);
        $this->load->view('people/ubah',$data);
        $this->load->view('template/footer'); 
        }
        else{
          $this->Model_people->ubahDataPeople();
          $this->session->set_flashdata('flash','Diubah');
          redirect('People');
        }
        }

        public function hapus($id)
        {
          $this->Model_people->hapusDataPeople($id);
          $this->session->set_flashdata('flash','Dihapus');
          redirect('People');
        }
}