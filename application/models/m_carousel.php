<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_carousel extends CI_Model
{
 # add your city to set local time zone
    private $_table = "carousel";

    public $id_carousel;
    public $title;
    public $image = "default.jpg";
    public $text;

    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'title',
            'rules' => 'required'],

            
            ['field' => 'text',
            'label' => 'text',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_carousel" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->title = $post["title"];
		$this->image = $this->_uploadImage();
        $this->text = $post["text"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_carousel = $post["id"];
        $this->title = $post["title"];
		
		
		if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}

        $this->text = $post["text"];
        $this->db->update($this->_table, $this, array('id_carousel' => $post['id']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_carousel" => $id));
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/carousel/';
		$config['allowed_types']        = 'gif|jpg|png';
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
		$carousel = $this->getById($id);
		if ($carousel->image != "default.jpg") {
			$filename = explode(".", $carousel->image)[0];
			return array_map('unlink', glob(FCPATH."upload/carousel/$filename.*"));
		}
	}

}
