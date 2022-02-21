<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cara koneksiin ke database</title>
</head>

<body>
  <table border="3" cellspacing="0" cellpadding="10">
    <tr>
      <td>#</td>
      <td>Gambar</td>
      <td>Nama :</td>
      <td>NRP :</td>
      <td>Email :</td>
      <td>Jurusan</td>
      <td>Aksi</td>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $$m['gambar']; ?>" alt=""></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>