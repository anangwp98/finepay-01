<?php
include('../koneksi.php');
session_start();
if(isset($_POST['input_topup'])) {
    $nominal           = $_POST['nominal'];
    $keterangan         = $_POST['keterangan'];
    $id_user            = $_SESSION['id'];

    $date = date('dmY-Hi');
    $id="TP".rand().$date;
    $query="INSERT INTO `topup` (`id_topup`,`id_user`,`jumlah_topup`,`keterangan_topup`) VALUES ('$id', '$id_user', '$nominal','$keterangan')";
    if(mysqli_query($koneksi, $query)) {
        $statusTopup = "sukses";
        header("location:./index.php");
    } else {
        echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
    }
} else {
    echo "<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
}
?>