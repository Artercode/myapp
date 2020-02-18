<?php $this->load->view('partials/header'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row justify-content-center">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <h1>Tambah Artikel</h1>
            <div class="alert alert-warning">
                <?php echo validation_errors(); ?>
            </div>

            <?php echo form_open_multipart(); ?>
            <div class="form-group">
                <label for="">Judul</label>
                <?php echo form_input('title', set_value('title'), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label for="">URL</label>
                <?php echo form_input('url', set_value('url'), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label for="">Konten</label>
                <?php echo form_textarea('content', set_value('content'), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label>Cover</label>
                <?php echo form_upload('cover', set_value('cover'), 'class="form-control"'); ?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            </form>
        </div>
        <?php $this->load->view('partials/footer'); ?>