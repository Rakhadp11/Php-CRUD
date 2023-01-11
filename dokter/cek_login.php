<?php
session_start();
include '../koneksi.php' ;

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM dokter WHERE nd_dokter = '$username' AND nb_dokter = '$password'";


$result = mysqli_query($con, $query);

$rowcount=mysqli_num_rows($result);
if ($rowcount >0){
    $query = "SELECT * FROM dokter WHERE nd_dokter = '$username' AND nb_dokter = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result) ;

    $_SESSION["nd_dokter"] = $row["nd_dokter"];
    $_SESSION["nb_dokter"] = $row["nb_dokter"];
    header('Location: index.php');
}
else{
    header('Location: login.php');
}
?>