<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

	public function index()
	{   
        
        $this->load->view('template/header');
        $this->load->view('Trainer/index');
        $this->load->view('template/footer');
        }
        

}