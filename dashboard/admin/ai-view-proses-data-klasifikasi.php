<?php
session_start();
if($_SESSION['level'] == 'user') {
  header("location:../user/");
} else {
  include('header-admin.php');
  include('ai-data-klasifikasi.php');
  include('footer-admin.php');
}
  
?>