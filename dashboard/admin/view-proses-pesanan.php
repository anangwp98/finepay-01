<?php
session_start();
if($_SESSION['level'] == 'user') {
  header("location:../user/");
} else {
  include('header-admin.php');
  include('data-update-pesanan.php');
  include('footer-admin.php');
}
  
?>