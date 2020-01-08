<!-- Page content -->
<?php
$id_detail_pesanan = $_GET['id'];

$query_mysql_view_detail_pesanan = mysqli_query($koneksi, 
    "SELECT pesanan.id_pesanan, pesanan.tgl_pesanan, pesanan.ket_pesanan, 
    barang.nama_barang, barang.harga, 
    users.id, users.angkatan, users.nama,
    tagihan.id_tagihan, tagihan.jml_dp, tagihan.jml_tagihan, tagihan.jml_bulan 
    FROM pesanan 
    JOIN users ON pesanan.id_user=users.id 
    JOIN barang ON pesanan.id_barang=barang.id_barang 
    JOIN tagihan ON pesanan.id_pesanan=tagihan.id_pesanan 
    
    WHERE pesanan.id_pesanan='$id_detail_pesanan'");

while ($data_pesanan_user = mysqli_fetch_array($query_mysql_view_detail_pesanan)){ 
?>
<div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">ID - <?php echo $data_pesanan_user['id_pesanan'] ?></h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="./proses-update.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Informasi Top Up</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama User</label>
                        <input class="form-control form-control-alternative" type="hidden" name="id_pesanan" value="<?php echo $data_pesanan_user['id_pesanan'] ?>">
                        
                        <input class="form-control form-control-alternative" type="hidden" name="nama" value="<?php echo $data_pesanan_user['nama']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['nama']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Angkatan</label>
                        <input class="form-control form-control-alternative" type="hidden" name="angkatan" value="<?php echo $data_pesanan_user['angkatan']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['angkatan']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Tanggal Pesan </label>
                        <input class="form-control form-control-alternative" type="hidden" name="tgl_pesan" value="<?php echo $data_pesanan_user['tgl_pesanan'] ?>">
                        
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['tgl_pesanan']  ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nama Barang </label>
                        <input class="form-control form-control-alternative"  type="hidden" name="nama_barang" value="<?php echo $data_pesanan_user['nama_barang'] ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['nama_barang'] ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Harga Barang </label>
                        <input class="form-control form-control-alternative" type="hidden" name="hrg_barang" value="<?php echo $data_pesanan_user['jml_dp'] ?>">
                        
                        <input class="form-control form-control-alternative" disabled value="<?php echo "Rp. ". $data_pesanan_user['harga'].",- "  ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Tagihan /bulan </label>
                        <input class="form-control form-control-alternative"  type="hidden" name="tagihan" value="<?php echo $data_pesanan_user['nama_barang'] ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo "Rp. ".$data_pesanan_user['jml_tagihan'].",-" ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Lama Waktu </label>
                        <input class="form-control form-control-alternative" type="hidden" name="lama_waktu" value="<?php echo $data_pesanan_user['jml_dp'] ?>">
                        
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['jml_bulan']." Bulan" ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">ID Tagihan </label>
                        <input class="form-control form-control-alternative"  type="hidden" name="id_tagihan" value="<?php echo $data_pesanan_user['nama_barang'] ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['id_tagihan'] ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6"> 
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Status </label>
                        <input class="form-control form-control-alternative" type="hidden" name="status" value="<?php echo $data_pesanan_user['ket_pesanan'] ?>">
                        
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['ket_pesanan'] ?>">
                      </div>
                    </div>
                  </div>
                </div>
                
                <hr class="my-4" />
                <button class="btn btn-icon btn-3 btn-primary" type="submit" name="prosesPesanan">
                    <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                    <span class="btn-inner--text">Proses</span>
                </button>
              </form>
            </div>
          </div>
        </div>
</div>
      <?php }?>