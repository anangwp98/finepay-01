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
} else if(isset($_POST['simpan_website'])) {
    $nama           = $_POST['nama'];
    $deskripsi     = $_POST['deskripsi'];
    
    $id_increment = rand(); 
    $id_website="WB-".$id_increment;
    $query="INSERT INTO `website` (`id_website`, `nama`, `deskripsi`) VALUES ('$id_website', '$nama', '$deskripsi')";
    if(mysqli_query($koneksi, $query)) {
         header("location:./website.php");
    } else {
        echo "<script language='javascript'> alert('Data Kok Gagal Disimpan!');history.go(-1); </script>";
    }
} else if(isset($_POST['simpan_link_download'])) {
    $nama           = $_POST['nama'];
    $link           = $_POST['link'];
    $icon           = $_POST['icon'];
    $warna          = $_POST['warna'];
    
    $id_increment = rand(); 
    $id_unduh="DW-".$id_increment;
    $query="INSERT INTO `download` (`id_download`, `nama`, `link`, `icon`, `warna`) VALUES ('$id_unduh', '$nama', '$link', '$icon','$warna')";
    if(mysqli_query($koneksi, $query)) {
         header("location:./view-unduh.php");
    } else {
        echo "<script language='javascript'> alert('Data Kok Gagal Disimpan!');history.go(-1); </script>";
    }
} else {
    echo "<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
}
?>