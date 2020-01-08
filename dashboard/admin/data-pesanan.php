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

            $data_pesanan = "SELECT users.nama, barang.nama_barang, pesanan.id_pesanan, pesanan.ket_pesanan,DATE_FORMAT(pesanan.tgl_pesanan , '%D %M %Y - %H:%i:%s') AS 'tanggal' 
            FROM pesanan
            JOIN users ON users.id = pesanan.id_user
            JOIN barang ON barang.id_barang = pesanan.id_barang
            WHERE pesanan.ket_pesanan='On Proccess' OR pesanan.ket_pesanan=''";
            $hasil_pesanan = mysqli_query($koneksi, $data_pesanan); 

            $record_pesanan = mysqli_num_rows($hasil_pesanan);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($record_pesanan) > 0) {
              while($row = mysqli_fetch_assoc($hasil_pesanan)) {
                  echo "<tr>
                    <th scope='row'>" . $row["id_pesanan"]. "</th>
                    <td>" . $row["nama"]."</td>
                    <td>".$row["nama_barang"]."</td>
                    
                    <td>".$row["tanggal"]."</td>
                    <td scope='row'>
                      <a href='view-proses-pesanan.php?id=".$row['id_pesanan']."'><button type='button' class='btn btn-outline-info'>Proses</button></a>
                      <a href='view-tolak-pesanan.php?id=".$row['id_pesanan']."'><button type='button' class='btn btn-outline-danger'>Proses</button></a>
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