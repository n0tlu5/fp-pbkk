<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebutuhan extends CI_Controller {

    public function index() 
	{
		$this->load->view('admin/kebutuhan/index');
    }
    
}