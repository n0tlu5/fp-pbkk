<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

    public function index() 
	{
		$this->load->view('admin/donasi/index');
    }
    
}
