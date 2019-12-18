<?php 
include ('../koneksi.php');
if(isset($_POST['update'])){
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $email          = $_POST['email'];
    $jk             = $_POST['jenkel'];
    $tglLahir       = $_POST['tglLahir'];
    $alamat         = $_POST['alamat'];
    $sqlDate        = date('Y-m-d', strtotime($tglLahir));
    $query = "UPDATE `users` SET `nama`='$nama', `email`='$email',  `jk`='$jk', `tglLahir`='$sqlDate', `alamat`='$alamat' WHERE `users`.`id`='$id'";
    if(mysqli_query($koneksi, $query)) {
			// $_SESSION['nama'] = $nama;
			// $_SESSION['email'] = $email;
			// $_SESSION['tglLahir'] = $sqlDate;
			// $_SESSION['alamat'] = $alamat;
			// $_SESSION['jk'] = $jk;
        header("location: profil-admin.php");
    } else {
        echo"<script language='javascript'> alert('Query Salah! Data Gagal Disimpan!');history.go(-1); </script>";
    }
} else {
    echo "<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
}
?>