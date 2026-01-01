<div class="content-wrapper">

  <!-- Page header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('admin/dashboard'); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">

        <!-- LEFT COLUMN -->
        <div class="col-lg-6">

          <!-- Visitors Card -->
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Visitors</h3>
                <a href="#">View Report</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">820</span>
                  <span>Visitors Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 12.5%
                  </span>
                  <span class="text-muted">Since last week</span>
                </p>
              </div>
              <div class="position-relative mb-4">
                <canvas id="visitors-chart" height="200"></canvas>
              </div>
            </div>
          </div>

          <!-- Products Table -->
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Products</h3>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-striped table-valign-middle">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Sales</th>
                    <th>More</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>
                      <img
                        src="<?php echo base_url('assets/admin/dist/img/default-150x150.png'); ?>"
                        class="img-circle img-size-32 mr-2"
                      >
                      Sample Product
                    </td>
                    <td>$13</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i> 12%
                      </small>
                      12,000 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- RIGHT COLUMN -->
        <div class="col-lg-6">

          <!-- Sales Card -->
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Sales</h3>
                <a href="#">View Report</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">$18,230</span>
                  <span>Sales Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 33.1%
                  </span>
                  <span class="text-muted">Since last month</span>
                </p>
              </div>
              <div class="position-relative mb-4">
                <canvas id="sales-chart" height="200"></canvas>
              </div>
            </div>
          </div>

          <!-- Overview -->
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Overview</h3>
            </div>
            <div class="card-body">

              <div class="d-flex justify-content-between border-bottom mb-3">
                <span class="text-success text-xl">
                  <i class="ion ion-ios-refresh-empty"></i>
                </span>
                <span class="text-muted">Conversion Rate</span>
              </div>

              <div class="d-flex justify-content-between border-bottom mb-3">
                <span class="text-warning text-xl">
                  <i class="ion ion-ios-cart-outline"></i>
                </span>
                <span class="text-muted">Sales Rate</span>
              </div>

              <div class="d-flex justify-content-between">
                <span class="text-danger text-xl">
                  <i class="ion ion-ios-people-outline"></i>
                </span>
                <span class="text-muted">Registration Rate</span>
              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

</div>
