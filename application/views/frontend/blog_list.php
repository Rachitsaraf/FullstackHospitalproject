<section class="ptb-100">
    <div class="container">
        <h2 class="mb-5">Blogs</h2>

        <?php if (empty($blogs)): ?>
            <p>No blogs found.</p>
        <?php endif; ?>

        <?php foreach ($blogs as $blog): ?>
            <div class="blog-list-item mb-4">

                <h3>
                    <a href="<?php echo base_url('blog/' . $blog->slug); ?>">
                        <?php echo $blog->title; ?>
                    </a>
                </h3>

                <p class="text-muted">
                    <?php echo date('d M Y', strtotime($blog->created_at)); ?>
                </p>

                <p>
                    <?php echo word_limiter(strip_tags($blog->content), 40); ?>
                </p>

                <a href="<?php echo base_url('blog/' . $blog->slug); ?>" class="btn btn-sm btn-primary">
                    Read More
                </a>

                <hr>

            </div>
        <?php endforeach; ?>

    </div>
</section>
