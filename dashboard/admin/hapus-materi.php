<?php 
include('../koneksi.php');
session_start();

$id_materi = $_GET['id'];
$query_get_materi = "SELECT nama_file FROM materi WHERE id_materi=$id_materi";
$hasil_query_get_materi = mysqli_query($koneksi, $query_get_materi);
$record_get_materi = mysqli_num_rows($hasil_query_get_materi);
if($record_get_materi > 0) {
    while($row = mysqli_fetch_assoc($hasil_query_get_materi)) {
        $path = '../assets/doc/'.$row['nama_file'];
        if(!unlink($path)) {
            echo "Gagal Menghapus file!";
        } else {
            echo "Berhasil";
        }
        $query = "DELETE FROM materi WHERE id_materi='$id_materi'";
        if(mysqli_query($koneksi, $query)) {
            
            header("location:./view-materi.php");
        } else {
            echo"<script language='javascript'> alert('Data Gagal Dihapus!');history.go(-1); </script>";
        }
    }
}
?>