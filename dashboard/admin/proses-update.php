<?php 
include ('../koneksi.php');
session_start();
if(isset($_POST['update'])){
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $email          = $_POST['email'];
    $jk             = $_POST['jenkel'];
    $tglLahir       = $_POST['tglLahir'];
    $alamat         = $_POST['alamat'];
    $sqlDate        = date('Y-m-d', strtotime($tglLahir));
    $query = "UPDATE `users` SET `nama`='$nama', `email`='$email',  `jk`='$jk', `tglLahir`='$sqlDate', `alamat`='$alamat' WHERE `users`.`id`='$id'";
    if(mysqli_query($koneksi, $query)) {
			// $_SESSION['nama'] = $nama;
			// $_SESSION['email'] = $email;
			// $_SESSION['tglLahir'] = $sqlDate;
			// $_SESSION['alamat'] = $alamat;
			// $_SESSION['jk'] = $jk;
        header("location: profil-admin.php");
    } else {
        echo"<script language='javascript'> alert('Query Salah! Data Gagal Disimpan!');history.go(-1); </script>";
    }
} else if(isset($_POST['topupAdmin'])){
        $jmlTopup           = $_POST['jmltoup'];
        $id_user            = $_SESSION['id'];
        $query = "UPDATE `dompet` SET `saldo`=saldo+'$jmlTopup' WHERE `id_user`='$id_user'";
        if(mysqli_query($koneksi, $query)) {
            header("location: ./index.php");
        } else {
            echo"<script language='javascript'> alert('Query Salah! Data Gagal Disimpan!');history.go(-1); </script>";
        }
} else if(isset($_POST['prosesTopUp'])){
    
    date_default_timezone_set('Asia/Jakarta');
    
    $tgl_acc_topup = date('Y-m-d H:i:s');
    $id_topup = $_POST['id'];
    $id_admin = $_SESSION['id'];
    
    $id_dompet_admin = $_POST['id_dompet_admin'];
    
    $id_dompet_user = $_POST['id_dompet_user'];
    $id_log = "LGTP-".rand().$tgl_acc_topup;

    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $a = (int)$_POST['saldo'];
    $b = (int)$_POST['jml_topup'];

    if (is_numeric($a) && is_numeric($b)) {
        
        $saldo_akhir = ($_POST['saldo'] + $_POST['jml_topup']);
      } else {
        $saldo_akhir = 0;
      }
      
    $query_update_saldo_user = "UPDATE `dompet` SET `saldo` = '$saldo_akhir' WHERE `id_dompet` = '$id_dompet_user'";
    if(mysqli_query($koneksi, $query_update_saldo_user)) {
        $query_update_saldo_admin = "UPDATE dompet SET saldo=saldo-$b WHERE id_dompet='$id_dompet_admin'";
        if(mysqli_query($koneksi, $query_update_saldo_admin)) {
            $query_input_log = "INSERT INTO `log_topup` (`id`, `tgl_diterima`, `saldo_awal`, `saldo_akhir`, `id_user`, `id_topup`) VALUES ('$id_log', '$tgl_acc_topup', '$a', '$saldo_akhir', '$id_admin', '$id_topup')";
            if(mysqli_query($koneksi, $query_input_log)) {
                $query_update_topup = "UPDATE `topup` SET `status` = 'SELESAI' WHERE `topup`.`id_topup` = '$id_topup'";
                if(mysqli_query($koneksi, $query_update_topup)) {
                        header("location: ./view-topup.php");
                } else {
                    echo"<script language='javascript'> alert('Gagal Membuat Status Selesai!');history.go(-1); </script>";
                }
            } else {
                echo"<script language='javascript'> alert('Gagal Input Ke LOG');history.go(-1); </script>";
            }
        } else {
            echo"<script language='javascript'> alert('Saldo Admin Gagal Diproses');history.go(-1); </script>";
        }
    } else {
        echo"<script language='javascript'> alert('Saldo User Gagal Ditambahkan');history.go(-1); </script>";
    }
    

}else if(isset($_POST['prosesPesanan'])){
    $id                 = $_POST['id_pesanan'];
    $status             = "ACCEPTED";
    $query = "UPDATE `pesanan` SET `ket_pesanan`='$status' WHERE `id_pesanan`='$id'";
    if(mysqli_query($koneksi, $query)) {
        header("location: ./view-pesanan.php");
    } else {
        echo"<script language='javascript'> alert('Query Salah! Data Gagal Disimpan!');history.go(-1); </script>";
    }
        echo $id;
} else {
    echo "<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
}
?>