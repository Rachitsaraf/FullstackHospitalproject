<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>Edit Blog</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">

                    <form method="post">

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $blog->title ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" rows="8"
                                required><?= $blog->content ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" value="<?= $blog->meta_title ?>">
                        </div>

                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea name="meta_description"
                                class="form-control"><?= $blog->meta_description ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Blog</button>
                        <a href="<?= base_url('admin/blogs'); ?>" class="btn btn-secondary">Cancel</a>

                    </form>

                </div>
            </div>

        </div>
    </section>
</div>