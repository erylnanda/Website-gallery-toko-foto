<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_kategory extends CI_Model
{
 # add your city to set local time zone
    private $_table = "kategory";
    public $id_kategory;
    public $nama_kat;
    public $image = "default.jpg";
    public $slug_kat;


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
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kategory" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kategory = uniqid();
        $this->nama_kat = $post["title"];
		$this->image = $this->_uploadImage();
        $this->slug_kat = slug($post["title"]);
        $this->db->insert($this->_table, $this);
        var_dump($this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kategory = $post["id"];
        $this->nama_kat = $post["title"];
		if (!empty($_FILES["image"]["name"])) {
            $this->_deleteImage($post["id"]);   
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}
        $this->slug_kat = slug($post["title"]);

        $this->db->update($this->_table, $this, array('id_kategory' => $post['id']));
        var_dump($this);
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_kategory" => $id));
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/kategory/';
		$config['allowed_types']        = '*';
        $config['file_name']            = $this->id_kategory;
        $config['overwrite']            = true;
		// $config['max_size']             = 20000; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$kategory = $this->getById($id);
		if ($kategory->image != "default.jpg") {
			$filename = explode(".", $kategory->image)[0];
			return array_map('unlink', glob(FCPATH."upload/kategory/$filename.*"));
		}
	}

}
