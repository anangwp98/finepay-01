<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data Top Up</h3>
                  <hr>
                </div>
              </div>
              <div class="table-responsive">

            <?php

            $data_link = "SELECT topup.id_topup, users.nama, topup.jumlah_topup, DATE_FORMAT(topup.tanggal_topup, '%D %M %Y - %H:%i:%s') AS 'tanggal_topup', topup.keterangan_topup FROM topup JOIN users ON users.id=topup.id_user WHERE topup.status=''";
            $hasil_link = mysqli_query($koneksi, $data_link); 

            $total_record_link = mysqli_num_rows($hasil_link);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($total_record_link) > 0) {
              while($row = mysqli_fetch_assoc($hasil_link)) {
                  echo "<tr>
                    <th scope='row'>" . $row["id_topup"]. "</th>
                    <td>" . $row["nama"]."</td>
                    <td>".$row["jumlah_topup"]."</td>
                    
                    <td>".$row["tanggal_topup"]."</td>
                    <td scope='row'>
                      <a href='view-proses-topup.php?id=".$row['id_topup']."'><button type='button' class='btn btn-outline-info'>Proses</button></a>
                      <button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#modal-hapus-topup". $row["id_topup"] . "'>Hapus</button>
                    </td>
                  </tr>"; ?>
                  
                <!--
                ======================================================================================
                        SCRIPT UNTUK MENAMPILKAN MODAL HAPUS
                ======================================================================================
                -->
                <div class="modal fade" id="modal-hapus-topup<?php echo $row["id_topup"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-1-hapus" aria-hidden="true">
                  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                    <div class="modal-content bg-gradient-danger">
                      <div class="modal-header">
                        <h2 class="modal-title" id="modal-1-hapus">HAPUS - <?php echo $row["id_topup"] ?></h2>
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
                      <a href="./hapus-topup.php?id=<?php echo $row['id_topup']; ?>"><button type="button" class="btn btn-white">HAPUS</button></a>
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