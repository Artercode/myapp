<?php $this->load->view('partials/header'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <h1><?php echo $blog['title']; ?></h1>
            <?php echo $blog['content']; ?>
        </div>

        <?php $this->load->view('partials/footer'); ?>