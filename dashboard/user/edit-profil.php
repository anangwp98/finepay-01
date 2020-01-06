
<?php
session_start();
if(isset($_SESSION['username'])) {
  include('header-user.php'); 
  include('form-edit-profil.php');
  include('footer-user.php');
} else {
  echo "ERROR!";
}
?>