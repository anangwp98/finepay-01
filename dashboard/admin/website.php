<?php
session_start();
if($_SESSION['level'] == 'user') {
  header("location:../user/");
} else {
  include('header-admin.php');
  include('data-website.php');
  include('footer-admin.php');
}
?>