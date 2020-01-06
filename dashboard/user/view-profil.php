
<?php
session_start();
if(isset($_SESSION['username'])) {
  include('header-user.php'); 
  include('main-profil.php');
  include('footer-user.php');
} else {
  header("location:../../dashboard/");
}
?>