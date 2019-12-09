<?php 
session_start();

include("session_koneksi.php");

$sql = "SELECT username FROM user WHERE username='".$_POST['un']."' AND password='".$_POST['pw']."' ";

$hasil = mysqli_query($koneksi, $sql) or exit ("Error query : <b>".$sql."</b>");

if(mysqli_num_rows($hasil) > 0) {
    $data = mysqli_fetch_array($hasil);
    $_SESSION['username'] = $data['username'];
    header("Location:session_index.php");
    exit();
    } else { ?>
    <h2>Sorry..</h2>
    <p>
    Username atau password salah.
    Klik <a href="session_login.php">disini</a> untuk kembali login.
    </p>
    <?php
    }
?>