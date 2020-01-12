
<?php 

include('../koneksi.php');
include('./link-asset.php');
include('./header-report.php');

?>

    <p align="center">LAPORAN DATA USER FINEPAY</p>
    <table width="100%" id="tabel-data-barang" class="table align-items-center">
   	      
  <tr align="center">
   	<th>ID</th>
   	<th >Username</th>
    <th width="14%" >Nama</th>
    
    <th width="14%" >Jenis Kelamin</th>
    <th width="11%" >Email</th>
    <th width="9%" >Tanggal Lahir</th>
    <th width="9%" >Alamat</th>
    <th width="14%" >Angkatan</th>
   	<th width="8%" >Nomor Telepon</th>
  </tr>
          
  <?php
	    $query_report_users = "SELECT * FROM users  WHERE level='user' ORDER BY nama ASC"; 
		$hasil_query_report_users = mysqli_query($koneksi, $query_report_users); 

            $total_record_report_users = mysqli_num_rows($hasil_query_report_users);
            if (($total_record_report_users) > 0) {
                while($row_r_users = mysqli_fetch_assoc($hasil_query_report_users)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td ><?php echo $row_r_users['id']; ?></td>
   	            <td ><?php echo $row_r_users['username']; ?></td>
                <td align="center"><?php echo $row_r_users['nama']; ?></td>
                <td align="center"><?php echo $row_r_users['jk']; ?></td>
                <td align="center"><?php echo $row_r_users['email']; ?></td>                
                <td align="center"><?php echo $row_r_users['tglLahir']; ?></td>
   	            <td align="center"><?php echo $row_r_users['alamat']; ?></td>
   	            <td align="center"><?php echo $row_r_users['angkatan']; ?></td>
   	            <td align="center"><?php echo $row_r_users['nomorTelp']; ?></td>
                
              </tr>
      <?php 
            }
        } else {
        echo "Tidak ada data!";
        } ?>
           
    </tbody>
</table>
          
</body>
</html>