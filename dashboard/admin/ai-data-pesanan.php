<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data Pesanan</h3>
                  <hr>
                </div>
              </div>
              <div class="table-responsive">

            <?php

            $data_pesanan = "SELECT 
            pesanan.id_pesanan, pesanan.tgl_pesanan, pesanan.ket_pesanan, pesanan.ket_pesanan,
            barang.nama_barang, barang.harga, 
            users.id, users.angkatan, users.nama,
            tagihan.id_tagihan, tagihan.jml_dp, tagihan.jml_tagihan, tagihan.jml_bulan
            
            FROM pesanan 
            
            JOIN users ON pesanan.id_user=users.id 
            JOIN barang ON pesanan.id_barang=barang.id_barang 
            JOIN tagihan ON pesanan.id_pesanan=tagihan.id_pesanan";
            $hasil_pesanan = mysqli_query($koneksi, $data_pesanan); 

            $record_pesanan = mysqli_num_rows($hasil_pesanan);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">DP</th>
                    <th scope="col">Tagihan</th>
                    <th scope="col">Jumlah Bulan</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($record_pesanan) > 0) {
              while($row = mysqli_fetch_assoc($hasil_pesanan)) {
                  echo "<tr>
                    <th scope='row'>" . $row["id_pesanan"]. "</th>
                    <td>".$row["nama_barang"]."</td>
                    <td>".$row["harga"]."</td>
                    <td>".$row["jml_dp"]."</td>
                    <td>".$row["jml_tagihan"]."</td>
                    <td>".$row["jml_bulan"]." Bulan</td>
                    <td>".$row["ket_pesanan"]."</td>
                    <td>
                    <a href='ai-view-proses-data-klasifikasi.php?id=" . $row['id_pesanan'] . "'><button type='button' class='btn btn-outline-info'>Proses</button></a>
                    </td>
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