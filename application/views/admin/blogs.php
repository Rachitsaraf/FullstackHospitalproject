<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>All Blogs</h1>
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

            <div class="card">
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th style="width:150px;">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php if (!empty($blogs)): ?>
                            <?php foreach ($blogs as $i => $blog): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>

                                    <td><?= $blog->title ?></td>

                                    <td>
                                        <?= $blog->status ? 
                                            '<span class="badge badge-success">Published</span>' : 
                                            '<span class="badge badge-secondary">Draft</span>' ?>
                                    </td>

                                    <td><?= date('d M Y', strtotime($blog->created_at)) ?></td>

                                    <td>
                                        <!-- EDIT -->
                                        <a href="<?= base_url('admin/edit_blog/' . $blog->id); ?>"
                                           class="btn btn-sm btn-primary">
                                           Edit
                                        </a>

                                        <!-- DELETE -->
                                        <a href="<?= base_url('admin/delete_blog/' . $blog->id); ?>"
                                           class="btn btn-sm btn-danger"
                                           onclick="return confirm('Are you sure you want to delete this blog?');">
                                           Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">No blogs found</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </section>

</div>
