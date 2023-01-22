<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_kategory");
        $this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $data["kategorys"] = $this->m_kategory->getAll();
        $this->load->view("admin/kategory/list", $data);
    }

    public function add()
    {
        $kategory = $this->m_kategory;
        $validation = $this->form_validation;
        $validation->set_rules($kategory->rules());

        if ($validation->run()) {
            $kategory->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kategory/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kategory');
       
        $kategory = $this->m_kategory;
        $validation = $this->form_validation;
        $validation->set_rules($kategory->rules());

        if ($validation->run()) {
            $kategory->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kategory"] = $kategory->getById($id);
        if (!$data["kategory"]) show_404();
        
        $this->load->view("admin/kategory/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_kategory->delete($id)) {
            redirect(site_url('admin/kategory'));
        }
    }
}
