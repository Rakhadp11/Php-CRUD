<?php
session_start();
include '../koneksi.php' ;
$query = "SELECT * FROM dokter ORDER BY nd_dokter";
$result = mysqli_query($con, $query);


?>
<h1>Selamat Datang <?php echo $_SESSION["nd_dokter"]."  ".$_SESSION["nb_dokter"] ?></h1>
<a href="input.php">Tambah Data</a>
<a href="logout.php">LOGOUT</a>
<table border="1">
  <tr>
    <th>ID Dokter</th>
    <th>Nama Depan Dokter</th>
    <th>Nama Belakang Dokter</th>
    <th>Jenis Kelamin Dokter</th>
    <th>Alamat Dokter</th>
    <th>action</th>
  </tr>
  <?php
  while ($row = mysqli_fetch_assoc($result)){
    ?>
<tr>

    <td> <?php echo $row["id_dokter"]; ?> </td>
    <td> <?php echo $row["nd_dokter"]; ?> </td>
    <td> <?php echo $row["nb_dokter"]; ?> </td>
    <td> <?php echo $row["jk_dokter"]=="L"?'Laki-Laki':'Perempuan' ; ?> </td>
    <td> <?php echo $row["alamat_dokter"]; ?> </td>
    <td> 
        <a href="edit.php?id=<?php echo $row["id_dokter"]; ?>">edit</a>
        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="action.php?aksi=delete&id=<?php echo $row["id_dokter"]; ?>">hapus</a>
    </td>
</tr>
<?php
}


?>
  
</table>