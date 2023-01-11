<?php
include '../koneksi.php' ;

if($_REQUEST["aksi"] == "input"){

  $id_dokter = $_POST['id_dokter'];
  $nd_dokter = $_POST['nd_dokter'];
  $nb_dokter = $_POST['nb_dokter'];
  $jk_dokter = $_POST['jk_dokter'];
  $alamat_dokter = $_POST['alamat_dokter'];
  
// menginput data ke database
mysqli_query($con,"INSERT INTO dokter values('$id_dokter','$nd_dokter','$nb_dokter','$jk_dokter', '$alamat_dokter')");

header('Location: index.php');
}
else if($_REQUEST["aksi"] == "edit"){


    $id_dokter = $_POST['id_dokter'];
    $nd_dokter = $_POST['nd_dokter'];
    $nb_dokter = $_POST['nb_dokter'];
    $jk_dokter = $_POST['jk_dokter'];
    $alamat_dokter = $_POST['alamat_dokter'];

    // edit data ke database
mysqli_query($con,"
                    UPDATE dokter
                    SET
                    nd_dokter = '$nd_dokter',
                    nb_dokter = '$nb_dokter',
                    jk_dokter = '$jk_dokter',
                    alamat_dokter = '$alamat_dokter' 
                    WHERE id_dokter = '$id_dokter'                      
");

header('Location: index.php');
}
else if($_REQUEST["aksi"] == "delete"){

$id_dokter = $_GET['id'];

// menginput data ke database
mysqli_query($con,"DELETE FROM dokter WHERE id_dokter = '$id_dokter' ");

header('Location: index.php');
}
?>