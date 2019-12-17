<?php
include('../koneksi.php');
session_start();
if(isset($_POST['simpan_user'])) {
    $username           = $_POST['username'];
    $nama               = $_POST['nama'];
    $password           = md5($_POST['password']);
    $email              = $_POST['email'];
    $tglLahir           = $_POST['tglLahir'];
    $jk                 = $_POST['jenkel'];
    $alamat             = $_POST['alamat'];
    $telp               = $_POST['telp'];
    $level              = $_POST['level'];
    
    $low_username = strtolower($username);

    $new_auto_increment=$low_username; 
    
    $date = date('dmY-Hi');
    $id="FN".$new_auto_increment.$date;
    $query="INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `tglLahir`, `jk`, `alamat`, `nomorTelp`, `level`) VALUES ('$id', '$low_username', '$nama', '$email', '$password', '$tglLahir', '$jk', '$alamat', '$telp', '$level')";
    if(mysqli_query($koneksi, $query)) {
        header("location:./view-user.php");
    } else {
        echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
    }
} else if(isset($_POST['simpan_barang'])) {
    $nama           = $_POST['nama'];
    $harga          = $_POST['harga'];
    
    $id_nama = str_replace(' ', '-', $nama);
    $id_increment = rand(); 
    $id="BRG-".$id_increment.$id_nama;
    $query="INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`) VALUES ('$id', '$nama', '$harga')";
    if(mysqli_query($koneksi, $query)) {
        header("location:./view-barang.php");
    } else {
        echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
    }
} else if(isset($_POST['simpan_kategori'])) {
    $id_user        = $_SESSION['id'];
    $nama           = $_POST['nama'];
    $keterangan     = $_POST['keterangan'];
    
    $id_increment = rand(); 
    $id_kategori="KT-".$id_increment;
    $query="INSERT INTO `kategori` (`id_kategori`, `nama`, `id_user`, `keterangan`) VALUES ('$id_kategori', '$nama', '$id_user', '$keterangan')";
    if(mysqli_query($koneksi, $query)) {
         header("location:./kategori.php");
    } else {
        echo "<script language='javascript'> alert('Data Kok Gagal Disimpan!');history.go(-1); </script>";
    }
}else {
    echo "<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
}
?>