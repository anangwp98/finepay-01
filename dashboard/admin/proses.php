<?php
session_start();

$errors = array(); 

include('../koneksi.php');

if (isset($_POST['reg_admin'])) {
  $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $username = mysqli_real_escape_string($koneksi, $_POST['username']);
  $password = mysqli_real_escape_string($koneksi, $_POST['pass']);

  $user_check_query = "SELECT * FROM admin WHERE nama='$nama' OR username='$username' LIMIT 1";
  $result = mysqli_query($koneksi, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if (count($errors) == 0) {
    $password = md5($password);
    
    $low_username = strtolower($username);

    $new_auto_increment=$low_username;
    
    $date = date('dmY');
    $id="fn".$new_auto_increment.$date;

  	$query = "INSERT INTO admin VALUES('$id','$nama', '$low_username','$password')";
    mysqli_query($koneksi, $query);
    header('location: ./register.php');
  }
}