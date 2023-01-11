<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="action.php">
<input type="hidden" name="aksi" value="input">
<label for="id_dokter">ID Dokter:</label><br>
  <input type="text" id="id_dokter" name="id_dokter" value=""><br>

  <label for="nd_dokter">Nama Depan Dokter:</label><br>
  <input type="text" id="nd_dokter" name="nd_dokter" value=""><br>

  <label for="nb_dokter">Nama Belakang Dokter :</label><br>
  <input type="text" id="nb_dokter" name="nb_dokter" value=""><br>

  <label for="jk_dokter">Jenis Kelamin Dokter:</label><br>
  <input type="text" id="jk_dokter" name="jk_dokter" value=""><br>

  <label for="alamat_dokter">Alamat Dokter:</label><br>
  <input type="text" id="alamat_dokter" name="alamat_dokter" value=""><br><br>

  <input type="submit" value="Simpan">
</form>
</body>
</html>