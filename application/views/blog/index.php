<h1>Blogs</h1>

<?php foreach ($blogs as $blog): ?>
    <div style="margin-bottom:20px;">
        <h2>
            <a href="<?= base_url('blog/'.$blog->slug) ?>">
                <?= $blog->title ?>
            </a>
        </h2>
        <p><?= substr(strip_tags($blog->content), 0, 150) ?>...</p>
    </div>
<?php endforeach; ?>
