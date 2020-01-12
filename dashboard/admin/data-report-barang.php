
<?php 

include('../koneksi.php');
include('./link-asset.php');
include('./header-report.php');

?>

    <p align="center">LAPORAN DATA USER FINEPAY</p>
    <table width="100%" id="tabel-data-barang" class="table align-items-center">
   	      
  <tr align="center">
   	<th>ID</th>
   	<th >Nama</th>
    <th width="14%" >Harga</th>
    
  </tr>
          
  <?php
	    $query_report_barang = "SELECT * FROM barang ORDER BY nama_barang ASC"; 
		$hasil_query_report_barang= mysqli_query($koneksi, $query_report_barang); 

            $total_record_report_barang = mysqli_num_rows($hasil_query_report_barang);
            if (($total_record_report_barang) > 0) {
                while($row_r_barang = mysqli_fetch_assoc($hasil_query_report_barang)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td ><?php echo $row_r_barang['id_barang']; ?></td>
   	            <td ><?php echo $row_r_barang['nama_barang']; ?></td>
                <td align="center"><?php echo $row_r_barang['harga']; ?></td>
                
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