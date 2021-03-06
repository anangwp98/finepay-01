<?php include('query-admin.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Welcome <?php echo $_SESSION['nama']; ?>
  </title>
  <?php
    include('link-asset.php');
   ?>
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <?php include('sidebar-admin.php'); ?>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Dashboard</a>
        
        <?php
        if($showCreateDompet_admin == true) {
        ?>
          <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modal-buat-dompet">
          <span>Buat Dompet Sekarang</span>
          <span class="badge badge-white"><?php echo $a ?></span>
          </button>
        <?php 
        } else if($showCreateDompet_admin == false) {
        ?>
          <button type="button" class="btn btn-primary" disabled>
          <span><?php echo $a ?></span>
          </button>
          <button type="button" class="btn btn-success"   data-toggle="modal" data-target="#modal-topup-dompet">
          <span>Top Up</span>
          </button>
        <?php 
        }
        ?>
                  
        
        <!-- User -->
        <?php include('dropdown-admin.php'); ?>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Top Up</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $hasil_jml_topup; ?></span>
                      <span class="h2 font-weight-bold mb-0">
                      <?php
                        if ($view_user == true) {
                            echo "<br>
                                <a href='./view-topup.php'>                                              
                                  <button class='btn btn-icon btn-secondary btn-card-1' type='button'>
                                  <span class='btn-inner--icon'><i class='far fa-eye'></i></span>
                                  <span class='btn-inner--text'>Lihat Data</span>
                                  </button>
                                </a>";
                        } else {
                          echo "<br>                                               
                                <button class='btn  btn-icon btn-card-1' type='button' disabled>
                                <span class='btn-inner--icon'><i class='far fa-eye'></i></span>

                                <span class='btn-inner--text'>Lihat Data</span>

                                </button>";
                        }
                      ?>  
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-user-shield"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Jumlah User</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $hasil_jml_user; ?></span>
                      <?php
                        if ($view_user == true) {
                            echo "<br>
                                <a href='./view-user.php'>                                              
                                  <button class='btn btn-icon btn-secondary btn-card-1' type='button'>
                                  <span class='btn-inner--icon'><i class='far fa-eye'></i></span>
                                  <span class='btn-inner--text'>Lihat Data</span>
                                  </button>
                                </a>";
                        } else {
                          echo "<br>                                               
                                <button class='btn  btn-icon btn-card-1' type='button' disabled>
                                <span class='btn-inner--icon'><i class='far fa-eye'></i></span>

                                <span class='btn-inner--text'>Lihat Data</span>

                                </button>";
                        }
                      ?>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Saldo User</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo "RP. ".$jml_saldo['jml_saldo'].",-" ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                      <i class="fas fa-money-check-alt"></i>
                      </div>
                    </div>
                  </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-success mr-2"><i class="fas fa-calculator"></i></span>
                    <span class="text-nowrap">Total Semua Saldo</span>
                    </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Barang</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $hasil_jml_barang; ?></span>
                      <?php
                        if ($view_barang == true) {
                            echo "<br>
                              <a href='./view-barang.php'>                                                  
                                <button class='btn btn-icon btn-secondary btn-card-1' type='button'>
                                <span class='btn-inner--icon'><i class='far fa-eye'></i></span>

                                <span class='btn-inner--text'>Lihat Data</span>

                                </button>
                              </a>";
                        } else if($view_barang == false){
                          echo "<br>                                               
                                <button class='btn  btn-icon btn-card-1' type='button' disabled>
                                <span class='btn-inner--icon'><i class='far fa-eye'></i></span>

                                <span class='btn-inner--text'>Tidak ada data</span>

                                </button>";
                        }
                      ?>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-boxes"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                  <div class="modal fade" id="modal-buat-dompet" tabindex="-1" role="dialog" aria-labelledby="modal-buat-dompet" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent pb-0">
                              <div class="text-muted text-center mt-2 mb-3"><small>Masukkan Data</small></div>
                                <div class="card-body px-lg-5 py-lg-5">
                                  <form action="./proses.php" method="POST">
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-archive"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="username" type="hidden" name="id">
                                        <input class="form-control" placeholder="Nama Dompet" type="text" name="nama">
                                      </div>
                                    </div>
                                    <div class="text-center">
                                      <input type="submit" name="simpan_dompet" class="btn btn-primary my-4" value="Proses">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="modal-topup-dompet" tabindex="-1" role="dialog" aria-labelledby="modal-topup-dompet" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent pb-0">
                              <div class="text-muted text-center mt-2 mb-3"><small>Masukkan Data</small></div>
                                <div class="card-body px-lg-5 py-lg-5">
                                  <form action="./proses-update.php" method="POST">
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-archive"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="username" type="hidden" name="id">
                                        <input class="form-control" placeholder="Jumlah Top Up" type="text" name="jmltoup">
                                      </div>
                                    </div>
                                    <div class="text-center">
                                      <input type="submit" name="topupAdmin" class="btn btn-primary my-4" value="Proses">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>