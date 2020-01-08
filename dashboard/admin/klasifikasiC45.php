<?php

include('../koneksi.php');
  $data_hasil_klasifikasi = "SELECT * FROM klasifikasi_ai";
  $hasil_klasifikasi = mysqli_query($koneksi, $data_hasil_klasifikasi); 

  $total_record_hasil_klasifikasi = mysqli_num_rows($hasil_klasifikasi);
  if (($total_record_hasil_klasifikasi) > 0) {
    while($row = mysqli_fetch_assoc($hasil_klasifikasi)) {
      $tahun = $row['tahun'];
      $harga = $row['harga'];
      $dp = $row['dp'];
      $jml_bulan = $row['jml_bulan'];
      $ket = $row['ket'];


      $data = [
        [$tahun, $harga ,$dp,$jml_bulan,$ket],
      ]; 

      
    };
    // Nama Atribut data
    $attributes = [1 => "Tahun", 2 => "HOP", 3 => "UM", 4 => 'JWP']; 
    // Import Algoritma 
    include("c45.php"); //Buat instance 
    $c45 = new C45; // Set data dan atribut 
    $c45->setData($data)->setAttributes($attributes);

    // Hitung menggunakan data training 
    $c45->hitung(); 
    // Uji Coba dengan menggunakan 1 data testing sebagai berikut: 
    $data_testing = ['Muda', 'Kecil','Tinggi','Panjang'];
    echo $c45->predictDataTesting($data_testing); 
    // Luaran diatas akan menghasilkan jawaban Yes 
    // Sedangkan untuk melihat rule yang dihasilkan dari data set yang telah diberikan ialah dengan menggunakan perintah sebagai berikut: 
    $c45->printRules(); 
  }
