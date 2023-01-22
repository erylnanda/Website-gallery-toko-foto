<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class carousel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_carousel");
        $this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $data["carousels"] = $this->m_carousel->getAll();
        $this->load->view("admin/carousel/list", $data);
    }

    public function add()
    {
        $carousel = $this->m_carousel;
        $validation = $this->form_validation;
        $validation->set_rules($carousel->rules());

        if ($validation->run()) {
            $carousel->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/carousel/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/carousel');
       
        $carousel = $this->m_carousel;
        $validation = $this->form_validation;
        $validation->set_rules($carousel->rules());

        if ($validation->run()) {
            $carousel->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["carousel"] = $carousel->getById($id);
        if (!$data["carousel"]) show_404();
        
        $this->load->view("admin/carousel/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_carousel->delete($id)) {
            redirect(site_url('admin/carousel'));
        }
    }
}
