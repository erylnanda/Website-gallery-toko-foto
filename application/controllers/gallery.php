<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Gallery extends CI_controller{
	
	public function index(){
		$this->load->model("m_video");
		$this->load->model("m_kategory");
		$data["videos"] = $this->m_video->getAll();
		$data["kategorys"] = $this->m_kategory->getAll();
		$this->load->view('gallery2',$data);
	}
	public function photo($slug){
		$this->load->model('m_galery');
		$data["galerys"] = $this->m_galery->getBykategory($slug);
        // if (!$data["galerys"]) show_404();        
        $this->load->view('gallery', $data);
	}
	public function video(){
		$this->load->model("m_video");
		$data["videos"] = $this->m_video->getAll();
		$this->load->view('galleryvideo',$data);
	}
}