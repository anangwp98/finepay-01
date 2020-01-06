<?php 
include('../koneksi.php');
session_start();

if(isset($_POST['submit'])) {
    $id_user_upload = $_SESSION['id'];
    $id_upload = rand();
    $file = $_FILES['profilImg'];
    $fileName = $_FILES['profilImg']['name'];
    $fileTmpName = $_FILES['profilImg']['tmp_name'];
    $fileSize = $_FILES['profilImg']['size'];
    $fileError = $_FILES['profilImg']['error'];
    $fileType = $_FILES['profilImg']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError===0) {
            if($fileSize < 1000000) {
                $filenameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../assets/img/theme/'.$filenameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                $queryUpload = "INSERT INTO `profil_img` (`id_profil`, `id_user`, `status`) VALUES ('$id_upload', '$id_user_upload', '$filenameNew');";
                if(mysqli_query($koneksi, $queryUpload)) {
                    header("location: ./profil-admin.php?upload-success");
                } else {
                    echo"<script language='javascript'> alert('Data Gagal Disimpan!');history.go(-1); </script>";
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
}

?>