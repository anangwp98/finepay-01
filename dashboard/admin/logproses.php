<?php
session_start();

$errors = array();

include('../koneksi.php');

//Login user

if(isset($_POST['log_user'])){
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
            $_SESSION['succes'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Username atau pw salahh");
        }
    }
}
?>