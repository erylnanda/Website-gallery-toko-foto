<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Artikel extends CI_controller{
	
	public function index(){
		$this->load->model('m_article');
		$jumlah_data = $this->m_article->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/artikel/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 1;
		$from = $this->uri->segment(5);
		$this->pagination->initialize($config);		
		$data["articles"] = $this->m_article->getAll($config['per_page'],$from);
		$this->load->view('artikel',$data);
	}
	public function more($id = null){
		$this->load->model('m_article');
		$article = $this->m_article;
		$data["article"] = $article->getById($id);
        if (!$data["article"]) show_404();
        
        $this->load->view('artikelmore', $data);
	}
}