<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data User</h3>
                  <hr>
                  <button type="button" class="col-lg-3 btn btn-block btn-white" data-toggle="modal" data-target="#modal-form"><i class="fas fa-user-plus"></i> Tambah User</button>
                  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent pb-0">
                              <div class="text-muted text-center mt-2 mb-3"><small>Masukkan Data Diri User</small></div>
                                <div class="card-body px-lg-5 py-lg-5">
                                  <form action="./proses.php" method="POST">
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="username" type="hidden" name="id">
                                        <input class="form-control" placeholder="username" type="text" name="username">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-at"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email" name="email">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input class="form-control datepicker" placeholder="dd/mm/YYYY" type="text" name="tglLahir">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                    
                                    <label for="tahunAngkatan">Tahun Angkatan</label>
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input class="form-control" for="tahunAngkatan" placeholder="Tahun Angkatan" type="text" name="tahunAngkatan">
                                      </div>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                      <input name="jenkel" class="custom-control-input" id="Laki" type="radio" value="L">
                                      <label class="custom-control-label" for="Laki">Laki Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                      <input name="jenkel" class="custom-control-input" id="Perempuan" type="radio" value="P">
                                      <label class="custom-control-label" for="Perempuan">Perempuan</label>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                                        </div>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat user" name="alamat"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Nomor Telp" type="telp" name="telp">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Level" type="text" name="level">
                                      </div>
                                    </div>
                                    <div class="text-center">
                                      <input type="submit" name="simpan_user" class="btn btn-primary my-4" value="Proses">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive">

            <?php

            $data_admin = "SELECT users.id, users.username, users.nama, users.email, users.password, DATE_FORMAT(users.tglLahir, '%M %d %Y') as tglLahir, users.jk, users.alamat, users.angkatan, users.nomorTelp, users.level, personal_identity.id_personal_identity, personal_identity.id_user, personal_identity.ktp, personal_identity.ktm FROM users LEFT JOIN personal_identity ON users.id = personal_identity.id_user WHERE users.level='user'";
            $hasil_admin = mysqli_query($koneksi, $data_admin); 

            $total_record_admin = mysqli_num_rows($hasil_admin);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    
                    <th scope="col">Document</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($total_record_admin) > 0) {
              while($row = mysqli_fetch_assoc($hasil_admin)) {
                  
                if($row["jk"]=='L') {
                  $showJK = 'Laki-Laki';
                } else if($row["jk"] == 'P') {
                  $showJK = 'Perempuan';
                } else {
                  $showJK = 'Tidak Terdefinisikan';
                }
                // $showKTP = $row['ktp'];
                // $showKTM = $row['ktm'];
                    if($row['ktp'] == true) {
                      $tampilKTP = 1;
                      $showKTP = $row['ktp'];
                      $tampilrowKTP = "<img  src='../assets/img/datadiri/".$showKTP."' class='rounded-circle'>";
                    } else {
                      $tampilKTP = 0;
                      $tampilrowKTP = "~";
                    }
                    if($row['ktm'] == true) {
                      $tampilKTM = 1;
                      $showKTM = $row['ktm'];
                      $tampilrowKTM = "<img  src='../assets/img/datadiri/".$showKTM."' class='rounded-circle'>";
                    } else {
                      $tampilKTM = 0;
                      $tampilrowKTM = "~";
                    }
                  echo "<tr>
                    <th scope='row'>" . $row["username"]. "</th>
                    <td>" . $row["nama"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$showJK."</td>
                    <td>
                    <div class='avatar-group'>
                      <a href='#' class='avatar avatar-sm' data-toggle='tooltip'>
                          ".$tampilrowKTP."
                      </a>
                      <a href='#' class='avatar avatar-sm' data-toggle='tooltip'>
                          ".$tampilrowKTM."
                      </a>
                    </div>
                    </td>
                    <td scope='row'>
                      <button type='button' class='btn btn-outline-info' data-toggle='modal' data-target='#modal-notification". $row["id"] . "'>Info</button>
                      <button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#modal-hapus". $row["id"] . "'>Hapus</button>
                      
                    </td>
                  </tr>"; ?>
                  
                <!--
                ======================================================================================
                        SCRIPT UNTUK MENAMPILKAN MODAL VIEW
                ======================================================================================
                -->
                  <div class="modal fade" id="modal-notification<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="modal-content">    
                        <div class="modal-header">
                          <h2 class="modal-title" id="modal-title-notification">ID - <?php echo $row["id"] ?></h2>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                         </div>
                              
                         <div class="modal-body">          
                            <div class="py-3 text-center">
                              <h3>Nama : </h3><p><?php echo $row["nama"] ?></p>
                              <h3>Email : </h3><p><?php echo $row["email"] ?></p>
                              <h3>Tanggal Lahir : </h3><p><?php echo $row["tglLahir"] ?></p>
                              <h3>Jenis Kelamin : </h3>
                                <p>
                                  <?php
                                  echo $showJK;
                                  ?>
                                </p>
                                
                              <h3>Alamat : </h3><p><?php echo $row["alamat"] ?></p>
                              <h3>Telepon : </h3><p><?php echo $row["nomorTelp"] ?></p>
                            </div>
                          </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!--
                ======================================================================================
                        SCRIPT AKHIR MENAMPILKAN MODAL
                ======================================================================================
                --> 

                <!--
                ======================================================================================
                        SCRIPT UNTUK MENAMPILKAN MODAL VIEW UPDATE
                ======================================================================================
                -->
                
              <form action="proses-update.php" method="POST">
                <div class="modal fade" id="modal-edit<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="modal-content">    
                        <div class="modal-header">
                          <h2 class="modal-title" id="modal-title-edit">ID - <?php echo $row["id"] ?></h2>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                         </div>
                         <div class="modal-body">          
                            <div class="py-3 text-center">
                              <h3>Nama : </h3>
                              <input class="form-control text-center is-valid" placeholder="Nama Lengkap" type="text" value="<?php echo $row['nama'] ?>" name="nama">
                              <br>
                              <h3>Email : </h3>
                              <input class="form-control text-center is-valid" placeholder="Email" type="text" value="<?php echo $row['email'] ?>" name="email">
                              <br>
                              <h3>Tanggal Lahir : </h3>
                              <input class="form-control text-center datepicker is-valid" placeholder="Tanggal Lahir" type="text" value="<?php echo $row['tglLahir'] ?>" name="tglLahir">
                              <br>
                              <h3>Angkatan (Year) : </h3>
                              <input class="form-control text-center datepicker is-valid" placeholder="Angkatan" type="text" value="<?php echo $row['angkatan'] ?>" name="angkatan">
                              <br>
                              <h3>Jenis Kelamin : </h3>
                              <input class="form-control text-center is-valid" placeholder="L/P" type="text" value="<?php echo $row['jk'] ?>" name="jk">
                              <br>
                              <h3>Alamat : </h3>
                              <textarea rows="4" name="alamat " placeholder="Alamat Lengkap" class="form-control form-control-alternative is-valid"><?php echo $row['alamat']; ?></textarea>
                              <br>
                              <h3>Telepon : </h3>
                              <input class="form-control text-center is-valid" placeholder="Nomor Telepon" type="text" value="<?php echo $row['nomorTelp'] ?>" name="notelp">
                              </div>
                              
                              <input type="submit" value="Update" name="updateUser" class="btn btn-primary">
                              <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                             </div> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <!--
                ======================================================================================
                        SCRIPT AKHIR MENAMPILKAN MODAL UPDATE
                ======================================================================================
                --> 

                <!--
                ======================================================================================
                        SCRIPT UNTUK MENAMPILKAN MODAL HAPUS
                ======================================================================================
                -->
                <div class="modal fade" id="modal-hapus<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-1-hapus" aria-hidden="true">
                  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                    <div class="modal-content bg-gradient-danger">
                      <div class="modal-header">
                        <h2 class="modal-title" id="modal-1-hapus">HAPUS - <?php echo $row["id"] ?></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="py-3 text-center">
                          <h3>Apakah anda yakin menghapus user : </h3><p><?php echo $row["nama"] ?></p><br />
                        </div>    
                      </div>
                      <div class="modal-footer">
                      <a href="hapus_user.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-white">HAPUS</button></a>
                        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Batal</button> 
                      </div> 
                    </div>
                  </div>
                </div>
                <!--
                ======================================================================================
                        SCRIPT AKHIR MENAMPILKAN MODAL
                ======================================================================================
                -->
                

                

        <?php };
            } else {
              echo "<div class='alert alert-warning text-center' role='alert> 
              <span class='alert-inner--icon><strong>Warning!</strong> Tidak ada data ditemukan</span>
              
              </div>";
            }
                ?>
                
                </tbody>
              </table>
              
            </div>
          </div>
        </div>
      </div>