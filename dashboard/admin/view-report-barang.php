<?php
session_start();
if($_SESSION['level'] == 'user') {
  header("location:../user/");
} else {
  include('data-report-barang.php');
  include('footer-admin.php');
}
  
?>