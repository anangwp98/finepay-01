<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data User</h3>
                  <hr>
                </div>
              </div>
              <div class="table-responsive">

            <?php

            $data_hasil_klasifikasi = "SELECT * FROM klasifikasi_ai";
            $hasil_klasifikasi = mysqli_query($koneksi, $data_hasil_klasifikasi); 

            $total_record_hasil_klasifikasi = mysqli_num_rows($hasil_klasifikasi);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Tahun</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Uang Muka</th>
                    <th scope="col">Jumlah Bulan</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($total_record_hasil_klasifikasi) > 0) {
              while($row = mysqli_fetch_assoc($hasil_klasifikasi)) {
                  echo "<tr>
                    <td>" . $row["tahun"]."</td>
                    <td>".$row["harga"]."</td>
                    <td>".$row["dp"]."</td>
                    <td>".$row["jml_bulan"]."</td>
                    <td>".$row["ket"]."</td>
                  </tr>"; ?>
                  
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