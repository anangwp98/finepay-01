<?php 
    session_start();
    unset($_SESSION['username']);
?>
<h2>Terima Kasih</h2>
<p>
Anda telah logout dari system.
Klik <a href="session_login.php">disini</a> untuk kembali login.
</p>