<?php
include('../koneksi.php');
session_start();
if(isset($_POST['simpan_user'])) {
    $username           = $_POST['username'];
    $nama               = $_POST['nama'];
    $password           = md5($_POST['password']);
    $email              = $_POST['email'];
    $tglLahir           = $_POST['tglLahir'];
    $angkatan           = $_POST['tahunAngkatan'];
    $jk                 = $_POST['jenkel'];
    $alamat             = $_POST['alamat'];
    $telp               = $_POST['telp'];
    $level              = $_POST['level'];
    
    $low_username = strtolower($username);

    $new_auto_increment=$low_username; 
    
    $date = date('dmY-Hi');
    $id="FN".$new_auto_increment.$date;
    $query="INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `tglLahir`,`angkatan`, `jk`, `alamat`, `nomorTelp`, `level`) VALUES ('$id', '$low_username', '$nama', '$email', '$password', '$tglLahir', '$angkatan','$jk', '$alamat', '$telp', '$level')";
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
} else if(isset($_POST['simpan_dompet'])) {
    $nama           = $_POST['nama'];
    $id_user        = $_SESSION['id'];
    $saldo          = 0;
    $id_increment = rand(); 
    $id_dompet="WL-".$id_increment;
    $query="INSERT INTO `dompet` (`id_dompet`, `id_user`, `jenis_dompet`, `saldo`) VALUES ('$id_dompet', '$id_user', '$nama', '$saldo')";
    if(mysqli_query($koneksi, $query)) {
         header("location:./index.php");
    } else {
        echo "<script language='javascript'> alert('Data Kok Gagal Disimpan!');history.go(-1); </script>";
    }
} else if(isset($_POST['prosesKlasifikasi'])) {

    $id = $_POST['id_pesanan'];
    $keterangan_hasil = $_POST['status'];
     
    $tahun_atas = $_POST['tahun_atas'];
    $tahun_bawah = $_POST['tahun_bawah'];
    $hasil_bagi_tahun = $tahun_atas-$tahun_bawah;
    $klasifikasi_tahun = (1/3)*$hasil_bagi_tahun;
   
    $angkatan_user = $_POST['angkatan'];
    if($angkatan_user >= $tahun_atas){
        $klasifikasi_tahun_hasil = "Muda";
    } else if($angkatan_user>= $tahun_atas-(2*$klasifikasi_tahun)){
        $klasifikasi_tahun_hasil = "Menengah";

    } else if($angkatan_user< $tahun_atas-(2*$klasifikasi_tahun)){
        $klasifikasi_tahun_hasil = "Tua";

    }

    $dp_atas = $_POST['uang_muka_atas'];
    $dp_bawah = $_POST['uang_muka_bawah'];
    $hasil_bagi_dp = $dp_atas-$dp_bawah;
    $klasifikasi_dp = (1/3)*$hasil_bagi_dp;
   
    $dp_user = $_POST['jml_dp'];
    if($dp_user <= $dp_bawah){
        $klasifikasi_dp_hasil = "Rendah";
    } else if($dp_user> $dp_bawah){
        $klasifikasi_dp_hasil = "Tinggi";
    }

    $harga_barang_user = $_POST['hrg_barang'];
    if($harga_barang_user <= 4000000){
        $klasifikasi_harga_barang_hasil = "Kecil";
    } else if($harga_barang_user <= 8000000){
        $klasifikasi_harga_barang_hasil = "Sedang";
    } else if($harga_barang_user > 8000000){
        $klasifikasi_harga_barang_hasil = "Besar";
    }

    
    $jml_bulan_user = $_POST['lama_waktu'];
    if($jml_bulan_user <= 8){
        $klasifikasi_jml_bulan_hasil = "Pendek";
    } else if($jml_bulan_user <= 16){
        $klasifikasi_jml_bulan_hasil = "Normal";
    } else if($jml_bulan_user <= 24){
        $klasifikasi_jml_bulan_hasil = "Panjang";
    }

    $id_increment = rand(); 
    $id_klasifikasi="WL-".$id_increment;
    $query="INSERT INTO `klasifikasi_ai` (`id_klasifikasi`, `id_pesanan`, `harga`, `dp`, `jml_bulan`, `tahun`,`ket`) VALUES ('$id_klasifikasi', '$id', '$klasifikasi_harga_barang_hasil', '$klasifikasi_dp_hasil', '$klasifikasi_jml_bulan_hasil', '$klasifikasi_tahun_hasil','$keterangan_hasil');";
    if(mysqli_query($koneksi, $query)) {
         header("location:./ai-view-pesanan.php");
    } else {
        echo "<script language='javascript'> alert('Data Kok Gagal Disimpan!');history.go(-1); </script>";
    }
} else {
    echo "<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
}
?>