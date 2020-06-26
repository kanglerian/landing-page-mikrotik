<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{   
        
        $this->load->view('template/header');
        $this->load->view('Landing/index');
        $this->load->view('template/footer');
        }

        public function prog()
	{   
        
        $this->load->view('template/header');
        $this->load->view('Landing/program');
        $this->load->view('template/footer');
        }

        public function kurikulum()
	{   
        
        $this->load->view('template/header');
        $this->load->view('Landing/kurikulum');
        $this->load->view('template/footer');
        }

        public function trainer()
	{   
        
        $this->load->view('template/header');
        $this->load->view('Landing/trainer');
        $this->load->view('template/footer');
        }

        public function peserta()
	{   
        
        $this->load->view('template/header');
        $this->load->view('Landing/peserta');
        $this->load->view('template/footer');
        }
        

}