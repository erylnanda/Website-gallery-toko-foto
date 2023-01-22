<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_video extends CI_Model
{
 # add your city to set local time zone
    private $_table = "video";
    public $id_video;
    public $title;
    public $video = "default.jpg";

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
        return $this->db->get_where($this->_table, ["id_video" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_video = uniqid();
        $this->title = $post["title"];
		$this->video = $this->_uploadvideo();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_video = $post["id"];
        $this->title = $post["title"];
		
		
		if (!empty($_FILES["video"]["name"])) {
            $this->video = $this->_uploadvideo();
        } else {
            $this->video = $post["old_video"];
		}

        $this->db->update($this->_table, $this, array('id_video' => $post['id']));
    }

    public function delete($id)
    {
		$this->_deletevideo($id);
        return $this->db->delete($this->_table, array("id_video" => $id));
	}
	
	private function _uploadvideo()
	{
		$config['upload_path']          = './upload/video/';
		$config['allowed_types']        = '*';
        $config['file_name']            = $this->id_video;
        $config['overwrite']            = true;
		// $config['max_size']             = 20000; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		// if ($this->upload->do_upload('file')) {
		// 	return $this->upload->data("file_name");
		// }
		
		// return "default.jpg";
        if ( ! $this->upload->do_upload('video')){
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
        else{
            $img    = $this->upload->data();
            $video  = $img['file_name'];
            $filename = $img['file_type'];
            return $video;

        }
	}

	private function _deletevideo($id)
	{
		$video = $this->getById($id);
			$filename = explode(".", $video->video)[0];
			return array_map('unlink', glob(FCPATH."upload/video/$filename.*"));
	}

}
