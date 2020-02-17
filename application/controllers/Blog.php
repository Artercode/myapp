<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM blog");
        $data['blogs'] = $query->result_array();


        $this->load->view('blog', $data);
    }
}

/* End of file Blog.php */
