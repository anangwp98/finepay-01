<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data Kategori</h3>
                  <hr>
                  <button type="button" class="col-lg-3 btn btn-block btn-white" data-toggle="modal" data-target="#modal-kateghori-tambah"><i class="fas fa-user-plus"></i> Tambah Kategori</button>
                  <div class="modal fade" id="modal-kateghori-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-kateghori-tambah" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent pb-0">
                              <div class="text-muted text-center mt-2 mb-3"><small>Masukkan Data Kategori Anda</small></div>
                                <div class="card-body px-lg-5 py-lg-5">
                                  <form action="./proses.php" method="POST">
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fab fa-glide-g"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="ID" type="hidden" name="id">
                                        <input class="form-control" placeholder="Nama Kategori" type="text" name="nama">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                                        </div>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi" name="keterangan"></textarea>
                                      </div>
                                    </div>
                                    <div class="text-center">
                                      <input type="submit" name="simpan_kategori" class="btn btn-primary my-4" value="Proses">
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

            $data_kategori = "SELECT kategori.id_kategori, users.nama as namaUser, kategori.nama as namaKategori, kategori.keterangan FROM `kategori` JOIN users ON kategori.id_user = users.id";
            $hasil_kategori = mysqli_query($koneksi, $data_kategori); 

            $total_record_kategori = mysqli_num_rows($hasil_kategori);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Author</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($total_record_kategori) > 0) {
              while($row = mysqli_fetch_assoc($hasil_kategori)) {
                  echo "<tr>
                    <th scope='row'>" . $row["namaUser"]. "</th>
                    <td>" . $row["namaKategori"]."</td>
                    <td>".$row["keterangan"]."</td>
                    <td scope='row'>
                      <button type='button' class='btn btn-outline-info' data-toggle='modal' data-target='#modal-notification". $row["id_kategori"] . "'>Lihat</button>
                      <button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#modal-hapus". $row["id_kategori"] . "'>Hapus</button>
                    </td>
                  </tr>"; ?>
                  
                <!--
                ======================================================================================
                        SCRIPT UNTUK MENAMPILKAN MODAL VIEW
                ======================================================================================
                -->
                  <div class="modal fade" id="modal-notification<?php echo $row["id_kategori"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="modal-content">    
                        <div class="modal-header">
                          <h2 class="modal-title" id="modal-title-notification">ID - <?php echo $row["id_kategori"] ?></h2>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                         </div>
                              
                         <div class="modal-body">          
                            <div class="py-3 text-center">
                              <h3>Kategori : </h3><p><?php echo $row["namaKategori"] ?></p>
                              <h3>Keterangan : </h3><p><?php echo $row["keterangan"] ?></p>
                              <h3>Author : </h3><p><?php echo $row["namaUser"] ?></p>
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
                <div class="modal fade" id="modal-hapus<?php echo $row["id_kategori"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-1-hapus" aria-hidden="true">
                  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                    <div class="modal-content bg-gradient-danger">
                      <div class="modal-header">
                        <h2 class="modal-title" id="modal-1-hapus">HAPUS - <?php echo $row["id_kategori"] ?></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="py-3 text-center">
                          <h3>Yakin anda menghapus kategori : </h3><p><?php echo $row["namaKategori"] ?></p><br />
                        </div>    
                      </div>
                      <div class="modal-footer">
                      <a href="hapus_kategori.php?id=<?php echo $row['id_kategori']; ?>"><button type="button" class="btn btn-white">HAPUS</button></a>
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