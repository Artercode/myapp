<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index($nama, $goldarah, $alamat)
    {
        echo "Selamat Datang $nama <br>";
        echo "Golongan Darah Anda $goldarah <br>";
        echo "Anda tinggal di $alamat";
    }
}

/* End of file Blog.php */
