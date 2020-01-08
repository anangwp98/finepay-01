<!-- Page content -->
<div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                <?php
		            	$id_user_user = $_SESSION['id'];
                  $sqlImg = "SELECT * FROM profil_img WHERE id_user='$id_user_user'";
                  $resultImg = mysqli_query($koneksi, $sqlImg);
                 
                  while ($rowimg = mysqli_fetch_assoc($resultImg)) {
                    echo "<div>";
                      if ( $rowimg['status'] > 0) {
                        echo "<img src='../assets/img/theme/".$rowimg['status']."' class='rounded-circle'>";
                      } else {
                        echo "CRASH DATA!";
                      }
                    echo "</div>";
                  }

                  $query_cek_gambar = "SELECT * FROM `profil_img` WHERE id_user='$id_user_user'";
                  $sql_cek_gambar = mysqli_query($koneksi, $query_cek_gambar);
                  $resultCekGambar = mysqli_num_rows($sql_cek_gambar);

                  if (($resultCekGambar) > 0) {
                      $cek_gambar = 1;
                  } else {
                      $cek_gambar = 0;
                  }

                  if ($resultCekGambar > 0) {
                  
                    while($gmbr = mysqli_fetch_assoc($sql_cek_gambar)) {
                      $gambar = $gmbr['status'];

                    }
                  }

                  $query_cek_gambar_KTP = "SELECT * FROM `personal_identity` WHERE id_user='$id_user_user'";
                  $sql_cek_gambar_KTP = mysqli_query($koneksi, $query_cek_gambar_KTP);
                  $resultCekGambar_KTP = mysqli_num_rows($sql_cek_gambar_KTP);

                  if ($resultCekGambar_KTP > 0) {
                  
                    while($gmbrktp = mysqli_fetch_assoc($sql_cek_gambar_KTP)) {
                      $gambarKTP = $gmbrktp['ktp'];
                      $gambarKTM = $gmbrktp['ktm'];
                      $id_personal_id = $gmbrktp['id_personal_identity'];
                    }
                  } else {
                    $gambarKTP = 0;
                    $id_personal_id = 0;
                    $gambarKTM = 0;
                  }
                  ?>
                </div>
              </div>
            </div>
            <br>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                <br>
                <br>
                  <?php echo $_SESSION['nama']; ?><span class="font-weight-light">, 27</span>
                </h3>
                <div class="h5 font-weight-300 capitalize-css">
                  <i class="ni location_pin mr-2"></i><?php echo $_SESSION['level']; ?>
                </div>
                
              <form action="upload-img.php" method="post" enctype="multipart/form-data">
              <?php
                if($cek_gambar == 1) {
                  ?> 
                  <input type="hidden" name="cek_gambar" value="1">
                  <input type="hidden" name="name_gambar_profil" value="<?php echo $gambar ?>">
                <?php } else { ?>
                  <input type="hidden" name="cek_gambar" value="0">
                <?php 
                  $cek_gambar = false;
                }
              ?>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                      <input type="file" name="profilImg" class="form-control">
                      </div>

                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name='submit-img'>Upload</button>
              </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Akun Saya</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="proses-update.php" method="POST" enctype="multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Informasi Akun</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" name="username" class="form-control form-control-alternative" value="<?php echo $_SESSION['username']; ?>" disabled>
                        <input type="text" name="id" class="form-control form-control-alternative" value="<?php echo $_SESSION['id']; ?>" hidden>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Alamat Email</label>
                        <input type="email" name="email" class="form-control form-control-alternative" value="<?php echo $_SESSION['email']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control form-control-alternative" value="<?php echo $_SESSION['nama']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label class="form-control-label" for="input-address">Jenis Kelamin</label>
                        <div class="custom-control custom-radio mb-3">
                        <input type="radio" name="jenkel" class="custom-control-input" value="L" id="L" <?php if($_SESSION['jk']=="L"){ echo "checked";}?>/>
                          <label class="custom-control-label" for="L">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                          <input type="radio" name="jenkel" class="custom-control-input" id="P" value="P" <?php if($_SESSION['jk']=="P"){ echo "checked";}?>/>
                          <label class="custom-control-label" for="P">Perempuan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Tanggal Lahir</label>
                        
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control datepicker" name="tglLahir"  placeholder="Select date" type="text" value="<?php echo $_SESSION['tglLahir']; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Alamat</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <textarea rows="4" name="alamat" class="form-control form-control-alternative"><?php echo $_SESSION['alamat']; ?></textarea>
                  </div>
                </div>
                
                <input type="submit" value="Simpan Data Diri" name="update" class="btn btn-primary">
              </form>
              <form action="proses-update.php" method="post" enctype="multipart/form-data">
              <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Dokumen</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                  <p>KTP</p>
                  <hr class="my-4" />
                      <input type="text" name="idKTP" class="form-control form-control-alternative" value="<?php echo $id_personal_id; ?>" hidden>
                      <input type="text" name="nameKTP" class="form-control form-control-alternative" value="<?php echo $gambarKTP; ?>" >
                      <img src="../assets/img/datadiri/<?php echo $gambarKTP ?>" class="card-img-top">
                      <input type="file" name="docKTP" class="form-control">
                  </div>
                </div>
                
                <input type="submit" value="Simpan Document" name="simpan_ktp" class="btn btn-primary">
                </form>
                <form action="proses-update.php" method="post" enctype="multipart/form-data">
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Dokumen</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                  <p>KTM</p>
                  <hr class="my-4" />
                  <input type="text" name="idKTM" class="form-control form-control-alternative" value="<?php echo $id_personal_id; ?>" hidden>
                  <input type="text" name="nameKTM" class="form-control form-control-alternative" value="<?php echo $gambarKTM; ?>" >
                  <img src="../assets/img/datadiri/<?php echo $gambarKTM ?>" class="card-img-top">
                      <input type="file" name="docKTM" class="form-control">
                  </div>
                </div>
                
                <input type="submit" value="Simpan Document" name="simpan_ktm" class="btn btn-primary">
                <input TYPE="button" VALUE="Batal" onClick="history.go(-1);" class="btn btn-warning">
                </form>
            </div>
          </div>
        </div>
      </div>