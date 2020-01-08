<?php
include('../koneksi.php');

$query_jml_barang = "SELECT COUNT(*) AS 'Jumlah' FROM barang";
$sql_jml_barang= mysqli_query($koneksi, $query_jml_barang );
$jml_barang  = mysqli_fetch_array($sql_jml_barang);

$cek_data_barang = mysqli_num_rows($sql_jml_barang);
if ($cek_data_barang > 0){
    $hasil_jml_barang = $jml_barang['Jumlah'];
    if($jml_barang['Jumlah'] == 0) {
        $jml_barang['Jumlah'] = 0;
    }
} else {
    echo "Gagal mendapatkan data";
}

$query_cek_pesanan = "SELECT users.nama, barang.nama_barang, pesanan.id_pesanan, pesanan.tgl_pesanan, pesanan.ket_pesanan
FROM pesanan 
JOIN users ON users.id=pesanan.id_user
JOIN barang ON barang.id_barang=pesanan.id_barang WHERE users.id='" . $_SESSION['id'] ."'";
$sql_cek_pesanan= mysqli_query($koneksi, $query_cek_pesanan );

$cek_data_pesanan = mysqli_num_rows($sql_cek_pesanan);
if ($cek_data_pesanan > 0){
    
        $view_pesanan = true;
} else {
    $view_pesanan = false;
}

?>