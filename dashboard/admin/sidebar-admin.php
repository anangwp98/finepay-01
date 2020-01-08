      <a class="navbar-brand pt-0" href="../admin/index.php">
        <img alt="Image placeholder" src="../assets/img/brand/logo_finepay.png">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <?php include('dropdown-foto-profil-admin.php'); ?>
            </div>
          </a>
            <?php include('dropdown-admin.php'); ?>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a class="navbar-brand pt-0" href="../admin/index.php">
                <img alt="Image placeholder" src="../assets/img/brand/logo_finepay.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  class=" active>
          <a class=" nav-link " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item  class=" active>
          <a class=" nav-link " href=" ../../index.php"> <i class="fas fa-globe-asia"></i> Go to Website
            </a>
          </li>
          <li class="nav-item  class=" active>
          <a class=" nav-link " href=" ./view-pesanan.php"> <i class="fas fa-luggage-cart"></i> Data Pesanan
            </a>
          </li>
          <li class="nav-item  class=" active>
            <a class=" nav-link " href=" ./website.php"> <i class="fas fa-cogs"></i> Atur Website
            </a>
          </li>
          <li class="nav-item  class=" active>
            <a class=" nav-link " href=" ./kategori.php"> <i class="fas fa-align-left"></i> Kategori
            </a>
          </li>
          
          <li class="nav-item  class=" active>
            <a class=" nav-link " href=" ./view-unduh.php"> <i class="fas fa-download"></i> Alamat Unduh
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Upload your S&K</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="./view-materi.php">
              <i class="fab fa-pied-piper-hat"></i> Pengaturan
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Artificial Intelegent</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="./ai-view-user.php">
              <i class="fab fa-pied-piper-hat"></i> Data Masuk User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ai-view-pesanan.php">
              <i class="ni ni-palette"></i> Data Pesanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ai-view-klasifikasi-data.php">
              <i class="ni ni-ui-04"></i> Data Klasifikasi
            </a>
          </li>
        </ul>
      </div>