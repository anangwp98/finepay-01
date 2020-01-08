<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data Barang</h3>
                  <hr>
                    <div class="alert alert-info" role="alert">
                        <strong>Jumlah :</strong> <?php echo $jml_barang['Jumlah'] ?> Barang.
                    </div>
                </div>
              </div>
              <div class="table-responsive">
 
            <?php
                $query_view_barang = "SELECT * FROM barang";
                $sql_view_barang= mysqli_query($koneksi, $query_view_barang );
                $view_barang = mysqli_num_rows($sql_view_barang);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-barang" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                if (($view_barang) > 0) {
                    while($vi_barang = mysqli_fetch_assoc($sql_view_barang)) {      
                    echo "<tr>
                        <th scope='row'>" . $vi_barang["nama_barang"]. "</th>
                        <td>Rp. " . $vi_barang["harga"]." ,-</td>
                        <td scope='row'>
                        <a href='view-proses-pesanan.php?id=".$vi_barang['id_barang']."'><button type='button' class='btn btn-outline-info'>Pilih</button></a>
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