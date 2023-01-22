<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_article");
        $this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $data["articles"] = $this->m_article->getAll();
        $this->load->view("admin/article/list", $data);
    }

    public function add()
    {
        $article = $this->m_article;
        $validation = $this->form_validation;
        $validation->set_rules($article->rules());

        if ($validation->run()) {
            $article->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/article/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/article');
       
        $article = $this->m_article;
        $validation = $this->form_validation;
        $validation->set_rules($article->rules());

        if ($validation->run()) {
            $article->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["article"] = $article->getById($id);
        if (!$data["article"]) show_404();
        
        $this->load->view("admin/article/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_article->delete($id)) {
            redirect(site_url('admin/article'));
        }
    }
}
