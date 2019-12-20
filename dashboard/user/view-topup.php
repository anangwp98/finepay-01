<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">History Topup</h3>
                  <hr>
                </div>
              </div>
              <div class="table-responsive">

            <?php
            $data_topup = "SELECT topup.id_topup, users.nama, topup.jumlah_topup, topup.tanggal_topup FROM `topup` JOIN users ON topup.id_user=users.id WHERE id_user='".$_SESSION['id']."'";
            $hasil_topup = mysqli_query($koneksi, $data_topup); 

            $total_record_topup = mysqli_num_rows($hasil_topup);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah Top Up</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($total_record_topup) > 0) {
              while($row = mysqli_fetch_assoc($hasil_topup)) {
                  echo "<tr>
                    <th scope='row'>" . $row["nama"]. "</th>
                    <td> Rp. " . $row["jumlah_topup"].",-</td>
                    <td> " . $row["tanggal_topup"]."</td>
                    <td> " . "PENDING!"."</td>
                  </tr>"; ?>
                  
                <!--
                ======================================================================================
                        SCRIPT UNTUK MENAMPILKAN MODAL VIEW
                ======================================================================================
                -->
                  <div class="modal fade" id="modal-notification-download<?php echo $row["id_topup"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="modal-content">    
                        <div class="modal-header">
                          <h2 class="modal-title" id="modal-title-notification">ID - <?php echo $row["id_topup"] ?></h2>
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
    </div>