<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    }


    public function index()
    {
        $query = $this->Blog_model->getBlogs();
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }

    public function detail($url)
    {
        $query = $this->Blog_model->getSingelBlog('url', $url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required|alpha_dash');
        $this->form_validation->set_rules('content', 'Konten', 'required');

        if ($this->form_validation->run() === TRUE) {
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('cover')) {
                echo $this->upload->display_errors();
            } else {
                $data['cover'] = $this->upload->data()['file_name'];
            }

            $id = $this->Blog_model->insertBlog($data);
            if ($id) {
                echo "Data berhasil disimpan";
                redirect('/');
            } else {
                echo "Data gagal disimpan";
            }
        }
        $this->load->view('form_add');
    }

    public function edit($id)
    {
        $query = $this->Blog_model->getSingelBlog('id', $id);
        $data['blog'] = $query->row_array();

        if ($this->input->post()) {
            $post['title'] = $this->input->post('title');
            $post['content'] = $this->input->post('content');
            $post['url'] = $this->input->post('url');

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->do_upload('cover');

            if (empty($this->upload->data()['file_name'])) {
                $post['cover'] = $this->upload->data()['file_name'];
            }

            $id = $this->Blog_model->updateBlog($id, $post);

            if ($id)
                echo "Data berhasil disimpan";
            else
                echo "Data gagal disimpan";
        }
        $this->load->view('form_edit', $data);
    }

    public function delete($id)
    {
        $this->Blog_model->deleteBlog($id);
        redirect('/');
    }
}

/* End of file Blog.php */
