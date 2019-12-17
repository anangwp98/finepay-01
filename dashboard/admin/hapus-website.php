<?php 
include('../koneksi.php');
$id_website = $_GET['id'];
$query = "DELETE FROM website WHERE id_website='$id_website'";
if(mysqli_query($koneksi, $query)) {
    header("location:./website.php");
} else {
    echo"<script language='javascript'> alert('Data Gagal Dihapus!');history.go(-1); </script>";
}
?>