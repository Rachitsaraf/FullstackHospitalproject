<style>
/* 🔒 FORCE GRID STABILITY — LOCAL ONLY */
.blog-page-main-container {
    position: static !important;
    overflow: visible !important;
}

.blog-page-main-container .row {
    position: static !important;
    overflow: visible !important;
    transform: none !important;
}

.blog-page-main-container .blog-box {
    position: static !important;
    transform: none !important;
}

.blog-page-main-container img {
    max-width: 100% !important;
    display: block !important;
}
</style>

<section class="blog-page-main-container ptb-100">
    <div class="container" style="position:static; overflow:visible;">
        <div class="row" style="position:static; overflow:visible;">

            <?php foreach ($blogs as $blog): ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="position:static; overflow:visible;">

                <div class="blog-box shadow-sm"
                    style="width:100%; height:100%; display:flex; flex-direction:column; position:static;">

                    <div class="blog-img" style="position:relative; margin-bottom:45px;">
                        <a href="<?= base_url('blog/' . $blog->slug); ?>">
                            <img src="<?= base_url('assets/uploads/blogs/' . $blog->image); ?>"
                                alt="<?= htmlspecialchars($blog->title); ?>" style="
                                    width:100%;
                                    height:230px;
                                    object-fit:cover;
                                    display:block;
                                ">
                        </a>

                        <div class="blog-date" style="
                                position:absolute;
                                left:10px;
                                background:#6b2c0f;
                                color:#fff;
                                padding:6px 10px;
                                font-size:13px;
                                border-radius:4px;
                             ">
                            <?= date('d M', strtotime($blog->created_at)); ?>
                        </div>
                    </div>

                    <div class="blog-content" style="padding:15px; display:flex; flex-direction:column; flex-grow:1;">

                        <h5 style="margin-bottom:10px;">
                            <a href="<?= base_url('blog/' . $blog->slug); ?>" style="text-decoration:none; color:#222;">
                                <?= htmlspecialchars($blog->title); ?>
                            </a>
                        </h5>

                        <p style="flex-grow:1; margin-bottom:15px;">
                            <?= word_limiter(strip_tags($blog->content), 20); ?>
                        </p>

                        <a href="<?= base_url('blog/' . $blog->slug); ?>"
                            style="margin-top:auto; color:#6b2c0f; font-weight:600;">
                            Read More →
                        </a>

                    </div>

                </div>

            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>