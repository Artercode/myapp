<?php $this->load->view('partials/header'); ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <!-- Title -->
            <h1 class="mt-4">Artikel Terbaru.</h1>
            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Start Bootstrap</a>
            </p>
            <hr>

            <?php foreach ($blogs as $key => $blog) : ?>
                <div class="post-preview">
                    <a href="<?php echo site_url('blog/detail/' . $blog['url']); ?>">
                        <h2 class="post-title">
                            <?php echo $blog['title']; ?>
                        </h2>
                    </a>
                    <p class="post-meta">Posted on <?php echo $blog['date']; ?>
                        <a href="<?php echo site_url('blog/edit/' . $blog['id']); ?>">Edit</a>
                        <a href="<?php echo site_url('blog/delete/' . $blog['id']); ?>">Delete</a>
                    </p>
                    <?php echo $blog['content']; ?>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>

        <?php $this->load->view('partials/footer'); ?>