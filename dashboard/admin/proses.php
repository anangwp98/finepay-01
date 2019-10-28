<?php
session_start();
include('../koneksi.php');

/*--
======================================================================================
        SCRIPT UNTUK MENDAFTAR ADMIN
======================================================================================
 */
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
    
    $date = date('dmY-His');
    $id="fn".$new_auto_increment.$date;

  	$query = "INSERT INTO admin VALUES('$id','$nama', '$low_username','$password')";
    mysqli_query($koneksi, $query);
    header('location: ./register.php');
  }
}

/*
======================================================================================
        SCRIPT UNTUK LOGIN ADMIN
======================================================================================
 */
if(isset($_POST['login_admin'])){
  $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $username = mysqli_real_escape_string($koneksi, $_POST['username']);
  $password = mysqli_real_escape_string($koneksi, $_POST['password']);
  

  if (empty($username)) {
      array_push($errors, "username harus diisi");
  }
  if (empty($password)) {
      array_push($errors, "pasword harus isi");
  }

  if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * from admin where username='$username' AND password='$password'";
      $results = mysqli_query($koneksi, $query);
      if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['nama'] = $nama;
          $_SESSION['succes'] = "You are now logged in";
          header('location: index.php');
      }else {
        echo "Username atau password salah";
      }
  }
}