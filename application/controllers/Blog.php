<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index($nama, $goldarah, $alamat)
    {
        $data['nama'] = $nama;
        $data['goldarah'] = $goldarah;
        $data['alamat'] = $alamat;

        $this->load->view('blog', $data);
    }
}

/* End of file Blog.php */
