<?php $this->load->view('partials/header'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row justify-content-center">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <h1>Tambah Artikel</h1>
            <?php echo form_open(); ?>
            <div class="form-group">
                <label for="">Judul</label>
                <?php echo form_input('title', null, 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label for="">URL</label>
                <?php echo form_input('url', null, 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label for="">Konten</label>
                <?php echo form_textarea('content', null, 'class="form-control"'); ?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            </form>
        </div>
        <?php $this->load->view('partials/footer'); ?>