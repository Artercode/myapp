<?php $this->load->view('partials/header'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <h1>Edit Artikel</h1>
            <form method="POST">
                <div>
                    <label for="" class="form-group">Judul</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $blog['title']; ?>">
                </div>
                <div>
                    <label for="" class="form-group">URL</label>
                    <input type="text" name="url" class="form-control" value="<?php echo $blog['url']; ?>">
                </div>
                <div>
                    <label for="" class="form-group">Konten</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"><?php echo $blog['content']; ?></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            </form>
        </div>

        <?php $this->load->view('partials/footer'); ?>