<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

	public function index()
	{   
        
        $this->load->view('template/header');
        $this->load->view('Kurikulum/index');
        $this->load->view('template/footer');
        }
        

}