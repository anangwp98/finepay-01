<?php 
include('../koneksi.php');
$id = $_GET['id'];
$query = "DELETE FROM kategori WHERE id_kategori='$id'";
if(mysqli_query($koneksi, $query)) {
    header("location:./kategori.php");
} else {
    echo"<script language='javascript'> alert('Data Gagal Dihapus!');history.go(-1); </script>";
}
?>