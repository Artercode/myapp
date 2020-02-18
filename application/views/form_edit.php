<?php $this->load->view('partials/header'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <h1>Edit Artikel</h1>
            <?php echo form_open_multipart(); ?>
            <div>
                <label for="" class="form-group">Judul</label>
                <?php echo form_input('title', $blog['title'], 'class="form-control"'); ?>
            </div>
            <div>
                <label for="" class="form-group">URL</label>
                <?php echo form_input('url', $blog['url'], 'class="form-control"'); ?>
            </div>
            <div>
                <label for="" class="form-group">Konten</label>
                <?php echo form_textarea('content', $blog['content'], 'class="form-control"'); ?>
            </div>
            <div>
                <label for="" class="form-group">Cover</label>
                <?php echo form_upload('cover', $blog['cover'], 'class="form-control"'); ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            </form>
        </div>

        <?php $this->load->view('partials/footer'); ?>