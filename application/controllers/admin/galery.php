<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class galery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_galery");
        $this->load->model("m_kategory");
        $this->load->library('form_validation');
        $this->load->library('upload');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $data["galerys"] = $this->m_galery->getAll();
        $this->load->view("admin/galery/list", $data);
    }

    public function add()
    {
        $galery = $this->m_galery;
        $validation = $this->form_validation;
        $validation->set_rules($galery->rules());
        if ($validation->run()) {
            $galery->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["kategorys"] = $this->m_kategory->getAll();
        $this->load->view("admin/galery/new_form",$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/galery');
       
        $galery = $this->m_galery;
        $validation = $this->form_validation;
        $validation->set_rules($galery->rules());

        if ($validation->run()) {
            $galery->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["galery"] = $galery->getById($id);
        $data["kategorys"] = $this->m_kategory->getAll();
        if (!$data["galery"]) show_404();
        
        $this->load->view("admin/galery/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_galery->delete($id)) {
            redirect(site_url('admin/galery'));
        }
    }
}
