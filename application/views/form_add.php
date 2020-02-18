<?php $this->load->view('partials/header'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row justify-content-center">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <h1>Tambah Artikel</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" name="url" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            </form>
        </div>
        <?php $this->load->view('partials/footer'); ?>