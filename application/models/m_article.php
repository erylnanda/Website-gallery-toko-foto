<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_article extends CI_Model
{
    private $_table = "article";

    public $id_article;
    public $title;
    public $penerbit;
    public $image = "default.jpg";
    public $text;

    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'title',
            'rules' => 'required'],

            ['field' => 'penerbit',
            'label' => 'penerbit',
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
        return $this->db->get_where($this->_table, ["id_article" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->title = $post["title"];
        $this->penerbit = $post["penerbit"];
		$this->image = $this->_uploadImage();
        $this->text = $post["text"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_article = $post["id"];
        $this->title = $post["title"];
        $this->title = $post["penerbit"];
		
		
		if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}

        $this->text = $post["text"];
        $this->db->update($this->_table, $this, array('id_article' => $post['id']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_article" => $id));
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/article/';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 0; // 1MB
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
		$article = $this->getById($id);
		if ($article->image != "default.jpg") {
			$filename = explode(".", $article->image)[0];
			return array_map('unlink', glob(FCPATH."upload/article/$filename.*"));
		}
	}
    function jumlah_data(){
        return $this->db->get($this->_table)->num_rows();
    }

}
