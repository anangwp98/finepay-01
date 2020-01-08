<?php  
include('../koneksi.php');

// cek apakah yang mengakses halaman ini sudah login
if(!isset($_SESSION['username'])){
	header("location:./../index.php");
} else {

  $sql_jml_user = "SELECT count(*) as Jumlah from users WHERE level='user'";
  $query1_jml_user= mysqli_query($koneksi, $sql_jml_user );
  $jumlah_data_user = mysqli_fetch_array($query1_jml_user);

  $view_user = false;  
  $cek_data_user = mysqli_num_rows($query1_jml_user);
   if ($cek_data_user > 0){
      $hasil_jml_user = $jumlah_data_user['Jumlah'];
      $view_user = true;
  } else if ($cek_data_user == 0) {
      $hasil_jml_user = '0';
      $view_user = true;
  } else {
      echo "Gagal mendapatkan data";
  }


  $query_jml_saldo = "SELECT SUM(dompet.saldo) as 'jml_saldo' FROM dompet JOIN users ON dompet.id_user=users.id WHERE users.level='user'";
  $sql_jml_saldo= mysqli_query($koneksi, $query_jml_saldo );
  $jml_saldo = mysqli_fetch_array($sql_jml_saldo);

  $query_jml_barang = "SELECT COUNT(*) AS 'Jumlah' FROM barang";
  $sql_jml_barang= mysqli_query($koneksi, $query_jml_barang );
  $jml_barang  = mysqli_fetch_array($sql_jml_barang);

  $query_jml_website = "SELECT COUNT(*) AS 'Jumlah' FROM website";
  $sql_jml_website= mysqli_query($koneksi, $query_jml_website );
  $jml_website  = mysqli_fetch_array($sql_jml_website);
 
  $cek_data_website = mysqli_num_rows($sql_jml_website);
  if ($cek_data_website > 0){
      $hasil_jml_website = $jml_website['Jumlah'];
      if($jml_website['Jumlah'] == 0) {
          $view_website = true;
      } else {
          $view_website = false;
      }
  } else {
      echo "Gagal mendapatkan data";
  }

  $view_barang = false;
  $cek_data_barang = mysqli_num_rows($sql_jml_barang);
  if ($cek_data_barang > 0){
      $hasil_jml_barang = $jml_barang['Jumlah'];
      $view_barang = true;
  } else if ($cek_data_barang < 1) {
      $hasil_jml_barang = '-';
      $view_barang = true;
  } else {
      echo "Gagal mendapatkan data";
  }

  
  $query_jml_topup = "SELECT COUNT(*) AS 'Jumlah' FROM topup WHERE status=''";
  $sql_jml_topup= mysqli_query($koneksi, $query_jml_topup );
  $jml_topup  = mysqli_fetch_array($sql_jml_topup);

  $cek_data_topup = mysqli_num_rows($sql_jml_topup);
  if ($cek_data_topup > 0){
      $hasil_jml_topup = $jml_topup['Jumlah'];
      if($jml_topup['Jumlah'] == 0) {
          $view_topup = true;
      } else {
          $view_topup = false;
      }
  } else {
      echo "Gagal mendapatkan data";
  }

  $query_jml_unduh = "SELECT COUNT(*) AS 'Jumlah' FROM download";
  $sql_jml_unduh= mysqli_query($koneksi, $query_jml_unduh );
  $jml_unduh  = mysqli_fetch_array($sql_jml_unduh);

  $cek_data_unduh = mysqli_num_rows($sql_jml_unduh);
  if ($cek_data_unduh > 0){
      $hasil_jml_unduh = $jml_unduh['Jumlah'];
      if($jml_unduh['Jumlah'] < 2) {
          $view_unduh = true;
      } else {
          $view_unduh = false;
      }
  } else {
      echo "Gagal mendapatkan data";
  }

    $sql_view_saldo_admin = "SELECT dompet.saldo as 'jmlsaldo', dompet.id_dompet as 'id_dompet_admin' FROM `dompet` JOIN users ON users.id=dompet.id_user WHERE id_user='$_SESSION[id]'";
    $query_view_saldo_admin = mysqli_query($koneksi, $sql_view_saldo_admin );
    $jml_saldo_admin = mysqli_fetch_array($query_view_saldo_admin);
    
    $cek_data_saldo_admin = mysqli_num_rows($query_view_saldo_admin);

    if($cek_data_saldo_admin == NULL) {
        $a = "<i class='fas fa-times'></i>";
        $showCreateDompet_admin = true;
    } else if ($cek_data_saldo_admin > 0){
        $mataUang = "Rp. ";
        $akhirMataUang = ",-";
        $a = $mataUang.$jml_saldo_admin['jmlsaldo'].$akhirMataUang;
        $showCreateDompet_admin = false;
    } else if ($cek_data_saldo_admin == 0) {
        $a = '0';
    } else {
        echo "Gagal mendapatkan data";
    }

    
}
?>