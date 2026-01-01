<h1><?= $blog->title ?></h1>

<?php if ($blog->image): ?>
    <img src="<?= base_url('uploads/blogs/'.$blog->image) ?>" width="400">
<?php endif; ?>

<div>
    <?= $blog->content ?>
</div>
