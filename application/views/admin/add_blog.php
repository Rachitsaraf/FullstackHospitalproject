<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>Add Blog</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <!-- SUCCESS MESSAGE -->
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <!-- ERROR MESSAGE -->
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-body">

                    <!-- FORM -->
                    <form method="post" enctype="multipart/form-data">

                        <!-- TITLE -->
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   placeholder="Enter blog title"
                                   required>
                        </div>

                        <!-- CONTENT (CKEDITOR) -->
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content"
                                      id="editor"
                                      class="form-control"
                                      rows="10"
                                      required></textarea>
                        </div>

                        <!-- BLOG IMAGE -->
                        <div class="form-group">
                            <label>Blog Image</label>
                            <input type="file"
                                   name="image"
                                   class="form-control-file"
                                   accept="image/*"
                                   required>
                            <small class="text-muted">
                                Allowed formats: jpg, jpeg, png, webp
                            </small>
                        </div>

                        <!-- META TITLE -->
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text"
                                   name="meta_title"
                                   class="form-control"
                                   placeholder="SEO Meta Title">
                        </div>

                        <!-- META DESCRIPTION -->
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea name="meta_description"
                                      class="form-control"
                                      rows="3"
                                      placeholder="SEO Meta Description"></textarea>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" class="btn btn-primary">
                            Save Blog
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </section>

</div>

<!-- CKEDITOR CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>

<!-- CKEDITOR INIT -->
<script>
ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: [
            'heading', '|',
            'bold', 'italic', 'underline', '|',
            'bulletedList', 'numberedList', '|',
            'link', 'blockQuote', '|',
            'undo', 'redo'
        ]
    })
    .catch(error => {
        console.error(error);
    });
</script>
