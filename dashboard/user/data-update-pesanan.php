<!-- Page content -->
<?php
$id_pesanan = $_GET['id'];


 
$query_mysql_view_detail_barang = mysqli_query($koneksi, 
    "SELECT * FROM `barang` WHERE id_barang='$id_pesanan'");
while ($data_barang_detai = mysqli_fetch_array($query_mysql_view_detail_barang)){ 

$query_mysql_view_bunga_pertahun = mysqli_query($koneksi, 
  "SELECT * FROM `bunga` LIMIT 1");
while ($data_bunga_detail = mysqli_fetch_array($query_mysql_view_bunga_pertahun)){ 

  if(isset($_POST['hitung'])){
    $bunga        = $data_bunga_detail['bunga_persen'];
    $total_bulan  = $_POST['jml_bulan'];
  }
?>
<div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">ID - <?php echo $data_barang_detai['id_barang'] ?></h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="./proses.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Informasi Top Up</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama Barang</label>
                        <input class="form-control form-control-alternative" type="hidden" name="id" value="<?php echo $data_barang_detai['id_barang'] ?>">
                        <input class="form-control form-control-alternative" type="hidden" name="nama" value="<?php echo $data_barang_detai['nama_barang']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_barang_detai['nama_barang']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Harga</label>
                        <input class="form-control form-control-alternative" type="hidden" name="harga_brg" value="<?php echo $data_barang_detai['harga']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo "Rp. ".$data_barang_detai['harga'].",-" ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Uang Muka </label>
                        <input class="form-control form-control-alternative" type="numeric" name="jml_dp">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Margin</label>
                        <input class="form-control form-control-alternative" type="hidden" name="margin" value="<?php echo $data_bunga_detail['bunga_persen']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_bunga_detail['bunga_persen']."% per tahun";  ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Jumlah Bulan Angsuran </label>
                        <input class="form-control form-control-alternative" type="numeric" name="jml_bulan">
                      </div>
                    </div>
                  </div>
                </div>
                
                <hr class="my-4" />
                <button class="btn btn-icon btn-3 btn-primary" type="submit" name="prosesPesan">
                    <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                    <span class="btn-inner--text">Proses</span>
                </button>
              </form>
            </div>
          </div>
        </div>
        </div>
      <?php } }?>