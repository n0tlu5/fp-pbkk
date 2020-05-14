<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

    public function index() 
	{
		$this->load->view('admin/donasi/index');
    }

    public function add() 
	{
		// if($this->session->user_logged->role != "admin") redirect(site_url('admin/categories'));
        // $category = $this->category_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($category->rules());

        // if ($validation->run()) {
        //     $category->save();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        $this->load->view("admin/donasi/new_form");
    }

    public function edit($id = null)
    {
		// if($this->session->user_logged->role != "admin") redirect(site_url('admin/categories'));
        // if (!isset($id)) redirect('admin/categories');
       
        // $category = $this->category_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($category->rules());

        // if ($validation->run()) {
        //     $category->update();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        // $data["category"] = $category->getById($id);
		// if (!$data["category"]) show_404();
		$data = NULL;
        
        $this->load->view("admin/donasi/edit_form", $data);
    }

    public function delete($id=null)
    {
		if($this->session->user_logged->role != "admin") redirect(site_url('admin/categories'));
        if (!isset($id)) show_404();
        
        if ($this->category_model->delete($id)) {
            redirect(site_url('admin/categories'));
        }
    }
    
}
