<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/adminlte.min.css'); ?>">
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <b>Admin</b> Login
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <?php if ($this->session->flashdata('error')): ?>
                <p class="text-danger text-center">
                    <?= $this->session->flashdata('error'); ?>
                </p>
            <?php endif; ?>

            <form method="post" action="<?= base_url('auth/login') ?>">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
