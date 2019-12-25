
<!-- Page content -->
<?php
$id_detail_pesanan = $_GET['id'];
    $query_top_angkatan = mysqli_query($koneksi, 
    "SELECT angkatan FROM users WHERE level='user' ORDER BY angkatan DESC LIMIT 1");
while ($data_top_angkatan = mysqli_fetch_array($query_top_angkatan)){ 

    $query_bottom_angkatan = mysqli_query($koneksi, 
    "SELECT angkatan FROM users WHERE level='user' ORDER BY angkatan ASC LIMIT 1");
while ($data_bottom_angkatan = mysqli_fetch_array($query_bottom_angkatan)){ 

    $query_bottom_angkatan_klasifikasi = mysqli_query($koneksi, 
    "SELECT tahun_top, tahun_bottom FROM proses_tahun LIMIT 1");
while ($data_bottom_angkatan_klasifikasi = mysqli_fetch_array($query_bottom_angkatan_klasifikasi)){ 

    $query_top_dp = mysqli_query($koneksi, 
    "SELECT jml_dp FROM tagihan ORDER BY jml_dp DESC LIMIT 1");
while ($data_top_dp = mysqli_fetch_array($query_top_dp)){ 

    $query_bottom_dp = mysqli_query($koneksi, 
    "SELECT jml_dp FROM tagihan ORDER BY jml_dp ASC LIMIT 1");
while ($data_bottom_dp = mysqli_fetch_array($query_bottom_dp)){ 

    $query_top_bottom_dp_klasifikasi = mysqli_query($koneksi, 
    "SELECT top_uang_muka,bottom_uang_muka FROM proses_uang_muka LIMIT 1");
while ($data_top_bottom_dp_klasifikasi = mysqli_fetch_array($query_top_bottom_dp_klasifikasi)){ 

    $query_top_barang = mysqli_query($koneksi, 
    "SELECT harga FROM barang ORDER BY harga DESC LIMIT 1");
while ($data_top_barang = mysqli_fetch_array($query_top_barang)){ 

    $query_bottom_barang = mysqli_query($koneksi, 
    "SELECT harga FROM barang ORDER BY harga ASC LIMIT 1");
while ($data_bottom_barang = mysqli_fetch_array($query_bottom_barang)){ 

    $query_top_barang_klasifikasi = mysqli_query($koneksi, 
    "SELECT harga_top_barang, harga_botom_barang FROM proses_barang LIMIT 1");
while ($data_top_barang_klasifikasi = mysqli_fetch_array($query_top_barang_klasifikasi)){ 

    $query_top_tagihan = mysqli_query($koneksi, 
    "SELECT jml_tagihan FROM tagihan ORDER BY jml_tagihan DESC LIMIT 1");
while ($data_top_tagihan = mysqli_fetch_array($query_top_tagihan)){ 

    $query_bottom_tagihan = mysqli_query($koneksi, 
    "SELECT jml_tagihan FROM tagihan ORDER BY jml_tagihan ASC LIMIT 1");
while ($data_bottom_tagihan = mysqli_fetch_array($query_bottom_tagihan)){ 

    $query_tagihan_klasifikasi = mysqli_query($koneksi, 
    "SELECT * FROM proses_tagihan LIMIT 1");
while ($data_tagihan_klasifikasi = mysqli_fetch_array($query_tagihan_klasifikasi)){ 


?>
<div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-body">
            
            <form action="./proses.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Informasi Klasidikasi</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Data Tahun Paling Atas</label>
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_top_angkatan['angkatan']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Data Tahun Paling Bawah</label>
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_bottom_angkatan['angkatan']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Tahun Atas Untuk Klasifikasi</label>
                        <input class="form-control form-control-alternative" type="hidden" name="tahun_atas"  value="<?php echo $data_bottom_angkatan_klasifikasi['tahun_top']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_bottom_angkatan_klasifikasi['tahun_top']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Tahun Bawah Untuk Klasifikasi</label>
                        <input class="form-control form-control-alternative" type="hidden" name="tahun_bawah" value="<?php echo $data_bottom_angkatan_klasifikasi['tahun_bottom']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_bottom_angkatan_klasifikasi['tahun_bottom']; ?>">
                      </div>
                    </div>
                  </div>
                <hr class="my-4" />
              </div>
              <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Uang Muka Tertinggi</label>
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_top_dp['jml_dp']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Uang Muka Terendah</label>
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_bottom_dp['jml_dp']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Uang Muka Atas Untuk Klasifikasi</label>
                        <input class="form-control form-control-alternative" type="hidden" name="uang_muka_atas"  value="<?php echo $data_top_bottom_dp_klasifikasi['top_uang_muka']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_top_bottom_dp_klasifikasi['top_uang_muka']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Uang Muka Bawah Untuk Klasifikasi</label>
                        <input class="form-control form-control-alternative" type="hidden" name="uang_muka_bawah" value="<?php echo $data_top_bottom_dp_klasifikasi['bottom_uang_muka']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_top_bottom_dp_klasifikasi['bottom_uang_muka']; ?>">
                      </div>
                    </div>
                  </div>
                <hr class="my-4" />
              </div>
              <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Harga Termahal</label>
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_top_barang['harga']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Harga Terendah</label>
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_bottom_barang['harga']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Data Atas Untuk Klasifikasi</label>
                        <input class="form-control form-control-alternative" type="hidden" name="harga_atas" value="<?php echo $data_top_barang_klasifikasi['harga_top_barang']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_top_barang_klasifikasi['harga_top_barang']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Harga Bawah Untuk Klasifikasi</label>
                        <input class="form-control form-control-alternative" type="hidden" name="harga_bawah" value="<?php echo $data_top_barang_klasifikasi['harga_botom_barang']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_top_barang_klasifikasi['harga_botom_barang']; ?>">
                      </div>
                    </div>
                  </div>
                <hr class="my-4" />
              </div>
              
              <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Tagihan Termahal</label>
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_top_tagihan['jml_tagihan']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Tagihan Terendah</label>
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_bottom_tagihan['jml_tagihan']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Tagihan Atas Untuk Klasifikasi</label>
                        <input class="form-control form-control-alternative" type="hidden" name="tagihan_atas" value="<?php echo $data_tagihan_klasifikasi['top_tagihan']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_tagihan_klasifikasi['top_tagihan']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Tagihan Bawah Untuk Klasifikasi</label>
                        <input class="form-control form-control-alternative" type="hidden" name="tagihan_bawah" value="<?php echo $data_tagihan_klasifikasi['bottom_tagihan']; ?>">
                        <input class="form-control form-control-alternative" disabled value="<?php echo $data_tagihan_klasifikasi['bottom_tagihan']; ?>">
                      </div>
                    </div>
                  </div>
                <hr class="my-4" />
              </div>
            </div>
            
            <!-- Page content -->
            <?php
            $id_detail_pesanan = $_GET['id'];

            $query_mysql_view_detail_pesanan = mysqli_query($koneksi, 
                "SELECT pesanan.id_pesanan, pesanan.tgl_pesanan, pesanan.ket_pesanan, 
                barang.nama_barang, barang.harga, 
                users.id, users.angkatan, users.nama,
                tagihan.id_tagihan, tagihan.jml_dp, tagihan.jml_tagihan, tagihan.jml_bulan, tagihan.jml_dp
                FROM pesanan 
                JOIN users ON pesanan.id_user=users.id 
                JOIN barang ON pesanan.id_barang=barang.id_barang 
                JOIN tagihan ON pesanan.id_pesanan=tagihan.id_pesanan 
                
                WHERE pesanan.id_pesanan='$id_detail_pesanan'");
            while ($data_pesanan_user = mysqli_fetch_array($query_mysql_view_detail_pesanan)){ 

                $query_top_angkatan = mysqli_query($koneksi, 
                "SELECT angkatan FROM users ORDER BY angkatan DESC LIMIT 1");
            while ($data_top_angkatan = mysqli_fetch_array($query_top_angkatan)){ 

            ?>
            <div class="container-fluid ">
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
                            <h6 class="heading-small text-muted mb-4"><?php echo $data_tagihan_klasifikasi['bottom_tagihan'] ?></h6>
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
                                    <input class="form-control form-control-alternative" type="hidden" name="lama_waktu" value="<?php echo $data_pesanan_user['jml_bulan'] ?>">
                                    
                                    <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['jml_bulan']." Bulan" ?>">
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Jumlah DP </label>
                                    <input class="form-control form-control-alternative"  type="hidden" name="jml_dp" value="<?php echo $data_pesanan_user['nama_barang'] ?>">
                                    <input class="form-control form-control-alternative" disabled value="<?php echo $data_pesanan_user['jml_dp'] ?>">
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
                            <button class="btn btn-icon btn-3 btn-primary" type="submit" name="prosesKlasifikasi">
                                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                                <span class="btn-inner--text">Proses</span>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
<?php
                                                    }
                                                }
                                            }
                                        }
                                    } 
                                }     
                            }
                        }
                    }
                } 
            } 
        } 
    }
}
?>