<?php
include('./dashboard/koneksi.php');

$query_website = "SELECT * FROM website LIMIT 1";
$data_website= mysqli_query($koneksi, $query_website );
	if($cek_data > 0) {
		$data = mysqli_fetch_assoc($query_login);
?>