<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
        $data['blogs'] = [
            [
                'title'     => 'Artikel Pertama',
                'content'   => '<p>Lorem Ipsum has been the industrys standard dummy 
                text ever since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book.</p>'
            ],
            [
                'title'     => 'Artikel Kedua',
                'content'   => '<p>Lorem Ipsum has been the industrys standard dummy 
                text ever since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book.</p>'
            ],
            [
                'title'     => 'Artikel Ketiga',
                'content'   => '<p>Lorem Ipsum has been the industrys standard dummy 
                text ever since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book.</p>'
            ],
        ];

        $this->load->view('blog', $data);
    }
}

/* End of file Blog.php */
