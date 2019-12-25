<?php
session_start();
if($_SESSION['level'] == 'admin') {
  header("location:../admin/");
} else {
  include('header-user.php');
  include('data-update-pesanan.php');
  include('footer-user.php');
}
  
?>