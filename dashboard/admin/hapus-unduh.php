<?php 
include('../koneksi.php');
$id_download = $_GET['id'];
$query = "DELETE FROM download WHERE id_download='$id_download'";
if(mysqli_query($koneksi, $query)) {
    header("location:./view-unduh.php");
} else {
    echo"<script language='javascript'> alert('Data Gagal Dihapus!');history.go(-1); </script>";
}
?>