<?php 

include('../koneksi.php');
include('./link-asset.php');
include('./header-report.php');

?>

    <p align="center">LAPORAN DATA USER FINEPAY</p>
    <table width="100%" id="tabel-data-barang" class="table align-items-center">
   	      
  <tr align="center">
   	<th>ID Pesanan</th>
   	<th>Nama</th>
    <th>Barang</th>
    <th>Tanggal Pesan</th>
    <th>Harga</th>
    <th>Uang Muka</th>
    <th>Tagihan</th>
    <th>Jumlah Bulan</th>
    <th>Keterangan</th>
  </tr>
          
  <?php
	    $query_report_tagihan = "SELECT pesanan.id_pesanan, users.nama, pesanan.tgl_pesanan, pesanan.ket_pesanan, barang.nama_barang, barang.harga, tagihan.jml_dp, tagihan.jml_tagihan, tagihan.jml_bulan, tagihan.tgl_jatuh_tempo FROM `pesanan` 
      RIGHT JOIN users ON users.id=pesanan.id_user
      RIGHT JOIN barang ON barang.id_barang=pesanan.id_barang
      RIGHT JOIN tagihan ON pesanan.id_pesanan = tagihan.id_pesanan"; 
		$hasil_query_report_tagihan = mysqli_query($koneksi, $query_report_tagihan); 

            $total_record_report_tagihan = mysqli_num_rows($hasil_query_report_tagihan);
            if (($total_record_report_tagihan) > 0) {
                while($row_r_tagihan = mysqli_fetch_assoc($hasil_query_report_tagihan)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td ><?php echo $row_r_tagihan['id_pesanan']; ?></td>
   	            <td ><?php echo $row_r_tagihan['nama']; ?></td>
                <td align="center"><?php echo $row_r_tagihan['nama_barang']; ?></td>
                <td align="center"><?php echo $row_r_tagihan['tgl_pesanan']; ?></td>
                <td align="center"><?php echo "Rp. ".$row_r_tagihan['harga'].",- "; ?></td>
                <td align="center"><?php echo "Rp. ". $row_r_tagihan['jml_dp'].",- "; ?></td>                
                <td align="center"><?php echo "Rp. ". $row_r_tagihan['jml_tagihan'].",- "; ?></td>
   	            <td align="center"><?php echo $row_r_tagihan['jml_bulan']; ?></td>
   	            <td align="center"><?php echo $row_r_tagihan['ket_pesanan']; ?></td>
                
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