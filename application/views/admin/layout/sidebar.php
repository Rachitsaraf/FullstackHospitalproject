<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="<?php echo base_url('admin/dashboard'); ?>" class="brand-link">
    <img src="<?php echo base_url('assets/admin/dist/img/AdminLTELogo.png'); ?>" alt="Admin Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- User Panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item">
          <a href="<?php echo base_url('admin/dashboard'); ?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Appointments -->
        <li class="nav-item">
          <a href="<?php echo base_url('admin/appointments'); ?>" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>Appointments</p>
          </a>
        </li>

        <!-- Doctors (future use) -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-md"></i>
            <p>Doctors</p>
          </a>
        </li>

        <!-- Patients (future use) -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Patients</p>
          </a>
        </li>

        <!-- Settings -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>Settings</p>
          </a>
        </li>

        <!-- Logout -->
        <li class="nav-item">
          <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link text-danger">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/change_password') ?>" class="nav-link">
            <i class="nav-icon fas fa-key"></i>
            <p>Change Password</p>
          </a>
        </li>
        <!-- Blog Management -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-blog"></i>
            <p>
              Blogs
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/add_blog'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Blog</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url('admin/blogs'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Blogs</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->

  </div>
  <!-- /.sidebar -->
</aside>