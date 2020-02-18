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
        return $query = $this->db->get('blog');
    }
}

/* End of file Blog_model.php */
