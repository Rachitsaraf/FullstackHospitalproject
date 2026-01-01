<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- HERO SECTION -->
<section class="hero-banner-section institute-hero"
    style="background-image: url('<?php echo base_url("assets/images/banner-new.jpg"); ?>');">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title"><?= $blog->title ?></h1>

            <ul class="modern-breadcrumb-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><?= $blog->title ?></li>
            </ul>
        </div>
    </div>
</section>

<!-- BLOG PAGE -->
<div class="blog-page-main-container float_left ptb-100">
    <div class="container">
        <div class="row">

            <!-- LEFT CONTENT -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="blog-single-main-page">
                    <div class="blog-box p-0">

                        <!-- IMAGE + DATE -->
                        <div class="img-icon">
                            <?php if (!empty($blog->image)): ?>
                                <img src="<?= base_url('assets/uploads/blogs/'.$blog->image); ?>"
                                     alt="<?= $blog->title ?>"
                                     class="about-left-img">
                            <?php endif; ?>

                            <p class="text-center">
                                <?= date('d', strtotime($blog->created_at)); ?><br>
                                <?= date('F', strtotime($blog->created_at)); ?>
                            </p>
                        </div>

                        <!-- BLOG CONTENT -->
                        <div class="blog-content">

                            <h3 class="p-0"><?= $blog->title ?></h3>

                            <ul>
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-comments"></i> Comments 0</li>
                            </ul>

                            <!-- MAIN BLOG BODY -->
                            <?= $blog->content ?>

                        </div>
                    </div>

                    <!-- COMMENT FORM (STATIC FOR NOW) -->
                    <div class="form-section mb-4">
                        <h6>Leave a Comment</h6>

                        <div class="form-input plr-15">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="input-group flex-nowrap">
                                        <input type="text" class="form-control" placeholder="Name">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group flex-nowrap resp-mt-20">
                                        <input type="email" class="form-control" placeholder="Email">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <textarea class="form-control mt-4 ps-3" rows="3"
                                              placeholder="Enter Comment"></textarea>

                                    <div class="mt-2 checkbox-wrap">
                                        <input type="checkbox" id="comment">
                                        <label for="comment">
                                            By using this form you agree with the storage and handling of your data.
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <a href="javascript:;" class="button-btn mt-4">
                                    Post Comment
                                    <span><i class="fas fa-angle-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="blog-right-sidebar resp-30">

                    <!-- SEARCH -->
                    <div class="form-section m-0">
                        <h6>Search Keyword</h6>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                    </div>

                    <!-- RECENT POSTS (STATIC FOR NOW) -->
                    <div class="form-section">
                        <h6>Recent Posts</h6>

                        <div class="post-main-container">
                            <div class="post-container">
                                <p>Recent posts will appear here</p>
                            </div>
                        </div>
                    </div>

                    <!-- CATEGORIES (STATIC) -->
                    <div class="form-section">
                        <h6>Categories</h6>
                        <ul class="categories">
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Medical</a></li>
                            <li><a href="#">Surgery</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
