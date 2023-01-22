<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_galery extends CI_Model
{
 # add your city to set local time zone
    private $_table = "galery";
    public $id_photo;
    public $title;
    public $id_kategory;

    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'title',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('galery');
        $this->db->join('kategory', 'galery.id_kategory = kategory.id_kategory');
        $query = $this->db->get()->result();
        return $query;
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_photo" => $id])->row();
    }
    public function getBykategory($slug)
    {
        $this->db->select('*');
        $this->db->from('galery');
        $this->db->join('kategory', 'galery.id_kategory = kategory.id_kategory');
        $this->db->where('kategory.slug_kat', $slug);
        $query = $this->db->get()->result_object();
        return $query;
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_photo = uniqid();
        $this->title = $post["title"];
		$this->photo = $this->_uploadImage();
        $this->id_kategory = $post["kategori"];
        $this->db->insert($this->_table, $this);
        var_dump($this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_photo = $post["id"];
        $this->title = $post["title"];
		if (!empty($_FILES["image"]["name"])) {
            $this->photo = $this->_uploadImage();
        } else {
            $this->photo = $post["old_image"];
		}
        $this->id_kategory = $post["kategori"];

        $this->db->update($this->_table, $this, array('id_photo' => $post['id']));
        var_dump($this);
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_photo" => $id));
	}
	
	private function _uploadImage()
	{
        $config['upload_path']          = './upload/gallery/';
        $config['allowed_types']        = '*';
        $config['file_name']            = $this->id_photo;
        $config['overwrite']            = true;
        // $config['max_size']             = 20000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('image')){
            
            return $this->upload->data("file_name");

        }else{
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            $this->load->view('admin/galery/new_form');
        }
    }

	private function _deleteImage($id)
	{
		$galery = $this->getById($id);
		if ($galery->photo != "default.jpg") {
			$filename = explode(".", $galery->photo)[0];
			return array_map('unlink', glob(FCPATH."upload/galery/$filename.*"));
		}
	}

}
