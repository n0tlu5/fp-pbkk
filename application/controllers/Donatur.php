<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {

    public function index() 
	{
		$this->load->view('donatur');
    }
    
}