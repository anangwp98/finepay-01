
<?php 

include('../koneksi.php');
include('./link-asset.php');
include('./header-report.php');

?>

    <p align="center">LAPORAN DATA BARANG FINEPAY</p>
    <table width="100%" id="tabel-data-barang" class="table align-items-center">
   	      
  <tr align="center">
   	<th>ID</th>
   	<th >Nama</th>
    <th>Nama</th>
    
    <th>Tanggal Topup</th>
    <th>Keterangan</th>
    <th>Jumlah</th>
    <th>Saldo Awal</th>
    <th>Saldo Akhir</th>
   	<th>Tanggal Diterima</th>
  </tr>
          
  <?php
	    $query_report_topup= "SELECT * FROM topup
        JOIN users ON users.id=topup.id_user
        JOIN log_topup ON topup.id_topup=log_topup.id_topup ORDER BY tanggal_topup ASC"; 
		$hasil_query_report_topup = mysqli_query($koneksi, $query_report_topup); 

            $total_record_query_report_topup = mysqli_num_rows($hasil_query_report_topup);
            if (($total_record_query_report_topup) > 0) {
                while($row_r_topup = mysqli_fetch_assoc($hasil_query_report_topup)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td ><?php echo $row_r_users['id_topup']; ?></td>
   	            <td ><?php echo $row_r_users['nama']; ?></td>
                <td align="center"><?php echo $row_r_users['tanggal_topup']; ?></td>
                <td align="center"><?php echo $row_r_users['keterangan_topup']; ?></td>
                <td align="center"><?php echo $row_r_users['jumlah_topup']; ?></td>                
                <td align="center"><?php echo $row_r_users['saldo_awal']; ?></td>
   	            <td align="center"><?php echo $row_r_users['saldo_akhir']; ?></td>
   	            <td align="center"><?php echo $row_r_users['tgl_diterima']; ?></td>
                
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