<?php
include('../koneksi.php');
session_start();
if(isset($_POST['input_topup'])) {
    $nominal            = $_POST['nominal'];
    $keterangan         = $_POST['keterangan'];
    $id_user            = $_SESSION['id'];

    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d');
    
    $date_detail = date('Y-m-d H:i:s');
    $id="TP".rand().$date;
    $query="INSERT INTO `topup` (`id_topup`,`id_user`,`jumlah_topup`,`keterangan_topup`,`tanggal_topup`) VALUES ('$id', '$id_user', '$nominal','$keterangan', '$date_detail' )";
    if(mysqli_query($koneksi, $query)) {
        $statusTopup = "sukses";
        header("location:./index.php");
    } else {
        echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
    }
} if(isset($_POST['prosesPesan'])) {
    $id_barang          = $_POST['id'];
    $id_user            = $_SESSION['id'];
    $harga_brg          = $_POST['harga_brg'];
    date_default_timezone_set('Asia/Jakarta');
    $date               = date('Ymd');
    $date_detail        = date('Y-m-d H:i:s');
    $margin             = (int)$_POST['margin'];
    $status_pesanan     = 'On Proccess';

    $id_pesanan         = "ORD-".rand();
    $id_tagihan         = "TRX-".rand();

    $jml_dp             = $_POST['jml_dp'];
    $kekurangan_harga   = $harga_brg-$jml_dp;
    $jml_bulan          = $_POST['jml_bulan'];

    $margin_bulan       = (($margin/100)*$kekurangan_harga)/$jml_bulan;
    $cicilan_bulan      = $margin_bulan+($harga_brg/$jml_bulan);
    $total_harga        = $cicilan_bulan*$jml_bulan;
    $total_margin       = $total_harga-$harga_brg;
    

    $query_input_pesanan="INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_barang`, `tgl_pesanan`, `ket_pesanan`) VALUES ('$id_pesanan', '$id_user', '$id_barang', '$date_detail', '$status_pesanan')";
    if(mysqli_query($koneksi, $query_input_pesanan)) {
        $query_input_tagihan="INSERT INTO `tagihan` (`id_tagihan`, `id_pesanan`, `jml_dp`, `jml_tagihan`, `jml_bulan`) VALUES ('$id_tagihan', '$id_pesanan', '$jml_dp', '$cicilan_bulan', '$jml_bulan');";
        if(mysqli_query($koneksi, $query_input_tagihan)) {
            header("location:./index.php");
        } else {
            echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
        }
    } else {
        echo"<script language='javascript'> alert('Data Pesanan Gagal Disimpan!');history.go(-1); </script>";
    }
} if(isset($_POST['create_dompet'])) {
    $id_user        = $_SESSION['id'];
    $saldo = 0;
    $new_auto_increment = rand();
    $id="DP".$new_auto_increment;
    $jenis_dompet = "Tabungan";
    $query="INSERT INTO `dompet` (`id_dompet`, `saldo`, `id_user`, `jenis_dompet`) VALUES ('$id', '$saldo', '$id_user', '$jenis_dompet');";
    if(mysqli_query($koneksi, $query)) {
        header("location:./index.php");
    } else {
        echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
    }
} else {
    echo "<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
}
?>