<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebutuhan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("kebutuhan_model");
        $this->load->library('form_validation');
        // $this->load->model("user_model");
		// if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index() 
	{
        $data["kebutuhan"] = $this->kebutuhan_model->getAll();
        $this->load->view("admin/kebutuhan/index", $data);
    }
    
    public function add()
    {
        $kebutuhan = $this->kebutuhan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kebutuhan->rules());

        if ($validation->run()) {
            $kebutuhan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kebutuhan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kebutuhan');
       
        $kebutuhan = $this->kebutuhan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kebutuhan->rules());

        if ($validation->run()) {
            $kebutuhan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kebutuhan"] = $kebutuhan->getById($id);
        if (!$data["kebutuhan"]) show_404();
        
        $this->load->view("admin/kebutuhan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/kebutuhan'));
        }
    }

}
