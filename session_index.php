<?php
session_start();

if(isset($_SESSION['username'])) {
?>

<h2>CONTROL PANEL</h2>
<p>Selamat datang user <?php echo $_SESSION['username'] ?>. Klik <a href="session_logout.php">LOGOUT</a> untuk keluar dari session ini</p>

<?php 
} else {
?>

<h2>Sorry..</h2>
<p>Anda tidak bisa mengakses halaman ini karena bukan hak anda. Silahkan <a href="session_login.php">Login</a> untuk masuk ke halaman anda.</p>
<?php } ?>