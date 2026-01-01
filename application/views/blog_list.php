<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="hero-banner-section institute-hero"
    style="background-image: url('<?php echo base_url("assets/images/banner-new.jpg"); ?>');">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">Blogs</h1>
            <ul class="modern-breadcrumb-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Blogs</li>
            </ul>
        </div>
    </div>
</section>

<div class="blog-page-main-container float_left ptb-100">
    <div class="container">
        <div class="row">

            <!-- LEFT SIDE BLOG LIST -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">

                <?php foreach ($blogs as $blog): ?>
                <div class="blog-box mb-5">

                    <div class="img-icon">
                        <img src="<?php echo base_url('assets/uploads/blogs/'.($blog->image ?? 'default.jpg')); ?>"
                             class="about-left-img">
                        <p class="text-center">
                            <?= date('d', strtotime($blog->created_at)); ?><br>
                            <?= date('M', strtotime($blog->created_at)); ?>
                        </p>
                    </div>

                    <div class="blog-content">
                        <h3>
                            <a href="<?php echo base_url('blog/'.$blog->slug); ?>">
                                <?= $blog->title; ?>
                            </a>
                        </h3>

                        <ul>
                            <li><i class="far fa-user"></i> By Admin</li>
                        </ul>

                        <p>
                            <?= substr(strip_tags($blog->content), 0, 250); ?>...
                        </p>

                        <a href="<?php echo base_url('blog/'.$blog->slug); ?>" class="button-btn">
                            Read More
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="blog-right-sidebar">
                    <h6>Recent Posts</h6>

                    <?php foreach ($blogs as $blog): ?>
                    <div class="post-main-container">
                        <div class="post-container">
                            <a href="<?php echo base_url('blog/'.$blog->slug); ?>" class="h6">
                                <?= $blog->title; ?>
                            </a>
                            <p><?= date('d M Y', strtotime($blog->created_at)); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</div>
