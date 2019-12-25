
<?php
session_start();
if(isset($_SESSION['username'])) {
  include('header-admin.php'); 
  include('form-edit-data-user.php');
  include('footer-admin.php');
} else {
  echo "ERROR!";
}
?>