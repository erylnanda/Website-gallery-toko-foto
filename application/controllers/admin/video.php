<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class video extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_video");
        $this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $data["videos"] = $this->m_video->getAll();
        $this->load->view("admin/video/list", $data);
    }

    public function add()
    {
        $video = $this->m_video;
        $validation = $this->form_validation;
        $validation->set_rules($video->rules());
        if ($validation->run()) {
            $video->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
        $this->load->view("admin/video/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/video');
        $video = $this->m_video;
        $validation = $this->form_validation;
        $validation->set_rules($video->rules());

        if ($validation->run()) {
            $video->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["video"] = $video->getById($id);
        if (!$data["video"]) show_404();
        
        $this->load->view("admin/video/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_video->delete($id)) {
            redirect(site_url('admin/video'));
        }
    }
}
