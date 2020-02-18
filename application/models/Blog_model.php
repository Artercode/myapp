<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    public function getBlogs()
    {
        return $this->db->get("blog");
    }
    // mengambil 1 baris data berdasarkan url nya
    public function getSingelBlog($url)
    {
        // $query = $this->db->query('SELECT * FROM blog WHERE url = "' . $url . '"');
        $this->db->where('url', $url);
        return $this->db->get('blog');
    }

    public function insertBlog($data)
    {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }
}

/* End of file Blog_model.php */
