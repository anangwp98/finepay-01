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
    // $query = "UPDATE `users` SET `nama`='$nama', `email`='$email',  `jk`='$jk', `tglLahir`='$sqlDate', `alamat`='$alamat' WHERE `users`.`id`='$id'";
    // if(mysqli_query($koneksi, $query)) {
    //     header("location: view-profil.php");
    // } else {
    //     echo"<script language='javascript'> alert('Query Salah! Data Gagal Disimpan!');history.go(-1); </script>";
    // }


    // $name_gambar = $_POST['docKTP'];

    $sql_select_ktp= mysqli_query($koneksi, "SELECT * FROM personal_identity WHERE id_user=$id" );
    $view_select_ktp = mysqli_num_rows($sql_select_ktp);

    if (($view_select_ktp) > 0) {
        while($vi_barang = mysqli_fetch_assoc($sql_view_barang)) {   

    $id_upload = rand();
    $file_ktp = $_FILES['docKTP'];
    $fileName_ktp = $_FILES['docKTP']['name'];
    $fileTmpName_ktp = $_FILES['docKTP']['tmp_name'];
    $fileSize_ktp = $_FILES['docKTP']['size'];
    $fileError_ktp = $_FILES['docKTP']['error'];
    $fileType_ktp = $_FILES['docKTP']['type'];

    $file_ktm = $_FILES['docKTM'];
    $fileName_ktm = $_FILES['docKTM']['name'];
    $fileTmpName_ktm = $_FILES['docKTM']['tmp_name'];
    $fileSize_ktm = $_FILES['docKTM']['size'];
    $fileError_ktm = $_FILES['docKTM']['error'];
    $fileType_ktm = $_FILES['docKTM']['type'];

    $fileExt_ktp = explode('.', $fileName_ktp);
    $fileExt_ktm = explode('.', $fileName_ktm);
    $fileActualExt_ktp = strtolower(end($fileExt_ktp));
    $fileActualExt_ktm = strtolower(end($fileExt_ktm));

    $allowed = array('jpg','jpeg', 'png');

    print_r($file_ktm);
    if(in_array($fileActualExt_ktp, $allowed)){
        if($fileError_ktp===0) {
            if($fileSize_ktp < 1000000) {
                unlink('../assets/img/datadiri/'.$fileName_ktp);
                $filenameNew_ktp = uniqid('', true).".".$fileActualExt_ktp;
                $fileDestination_ktp = '../assets/img/datadiri/'.$filenameNew_ktp;

                if ($cek_gambar_ktp == 1) {
                        $queryUpload_ktp = "UPDATE `profil_img` SET `status`='$filenameNew' WHERE `id_user`='$id_user_upload';";
                        if(mysqli_query($koneksi, $queryUpload)) {
                            header("location: ./view-profil.php?upload-success");
                        } else {
                            echo"<script language='javascript'> alert('Data Gagal DI Update!');history.go(-1); </script>";
                        }
                        
                        move_uploaded_file($fileTmpName, $fileDestination);
                } else {
                    $queryUpload = "INSERT INTO `profil_img` (`id_profil`, `id_user`, `status`) VALUES ('$id_upload', '$id_user_upload', '$filenameNew');";
                    if(mysqli_query($koneksi, $queryUpload)) {
                        header("location: ./view-profil.php?upload-success");
                    } else {
                        echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
                    }
                    
                    move_uploaded_file($fileTmpName, $fileDestination);
                }
            } else {
                echo "Your file is too big1";
            }
        } else {
            echo "There was an error uploading your files";
        }
    } else {
        echo "You cannot upload file of this type";
    }
} else {
    echo "<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
} 
?>