<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data Unduh Sistem</h3>
                  <hr>
                  <?php
                  
                  if($view_unduh == true) {
                  ?>
                  <button type="button" class="col-lg-3 btn btn-block btn-white" data-toggle="modal" data-target="#modal-download-tambah"><i class="fas fa-search-plus"></i> Tambah Alamat Unduh</button>
                  <?php
                  } else {
                    echo "This button is locked!";
                  }
                  
                  ?>
                  <div class="modal fade" id="modal-download-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-download-tambah" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent pb-0">
                              <div class="text-muted text-center mt-2 mb-3">
                                <small>Masukkan Data Alamat Unduh Anda</small>
                                <br>
                                <small>Lihat icon yang bisa kamu gunakan : <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome</a></small>
                              </div>
                                <div class="card-body px-lg-5 py-lg-5">
                                  <form action="./proses.php" method="POST">
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fab fa-glide-g"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="ID" type="hidden" name="id">
                                        <input class="form-control" placeholder="Nama ex: Google Play | Apps Store" type="text" name="nama">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Link download" type="text" name="link">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-atom"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="icon ex: <i class='fab fa-app-store'></i>" type="text" name="icon">
                                      </div>
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-palette"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="warna ex: btn-white | btn-primary" type="text" name="warna">
                                      </div>
                                    </div>
                                    <div class="text-center">
                                      <input type="submit" name="simpan_link_download" class="btn btn-primary my-4" value="Proses">
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

            $data_link = "SELECT * FROM `download` LIMIT 2";
            $hasil_link = mysqli_query($koneksi, $data_link); 

            $total_record_link = mysqli_num_rows($hasil_link);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($total_record_link) > 0) {
              while($row = mysqli_fetch_assoc($hasil_link)) {
                  echo "<tr>
                    <th scope='row'>" . $row["nama"]. "</th>
                    <td>" . $row["icon"]."</td>
                    <td>".$row["link"]."</td>
                    <td scope='row'>
                      <button type='button' class='btn btn-outline-info' data-toggle='modal' data-target='#modal-notification-download". $row["id_download"] . "'>Lihat</button>
                      <button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#modal-hapus-download". $row["id_download"] . "'>Hapus</button>
                    </td>
                  </tr>"; ?>
                  
                <!--
                ======================================================================================
                        SCRIPT UNTUK MENAMPILKAN MODAL VIEW
                ======================================================================================
                -->
                  <div class="modal fade" id="modal-notification-download<?php echo $row["id_download"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="modal-content">    
                        <div class="modal-header">
                          <h2 class="modal-title" id="modal-title-notification">ID - <?php echo $row["id_download"] ?></h2>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                         </div>
                              
                         <div class="modal-body">          
                            <div class="py-3 text-center">
                              <h3>Nama : </h3><p><?php echo $row["nama"] ?></p>
                              <h3>Icon : </h3><p><?php echo $row["icon"] ?></p>
                              <h3>Link : </h3><p><?php echo $row["link"] ?></p>
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
                        SCRIPT UNTUK MENAMPILKAN MODAL HAPUS
                ======================================================================================
                -->
                <div class="modal fade" id="modal-hapus-download<?php echo $row["id_download"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-1-hapus" aria-hidden="true">
                  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                    <div class="modal-content bg-gradient-danger">
                      <div class="modal-header">
                        <h2 class="modal-title" id="modal-1-hapus">HAPUS - <?php echo $row["id_download"] ?></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="py-3 text-center">
                          <h3>Yakin anda menghapus link : </h3><p><?php echo $row["nama"] ?></p><br />
                        </div>    
                      </div>
                      <div class="modal-footer">
                      <a href="hapus-unduh.php?id=<?php echo $row['id_download']; ?>"><button type="button" class="btn btn-white">HAPUS</button></a>
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