<?php

require_once("./koneksi.php");

if(isset($_POST['btn_register'])){
        $username           = $_POST['username'];
        $nama               = $_POST['nama'];
        $password           = md5($_POST['password']);
        $email              = $_POST['email'];
        $tglLahir           = $_POST['tglLahir'];
        $jk                 = $_POST['jenkel'];
        $level              = "user";
        
        $low_username = strtolower($username);
    
        $new_auto_increment=$low_username; 
        
        $date = date('dmY-Hi');
        $id="FN".$new_auto_increment.$date;
        $query="INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `tglLahir`, `jk`, `level`) VALUES ('$id', '$low_username', '$nama', '$email', '$password', '$tglLahir', '$jk', '$level')";
        if(mysqli_query($koneksi, $query)) {
            header("location:./login.php?pesan=register-success");
        } else {
            echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
        }

}
?>