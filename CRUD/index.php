<?php
require "crud.php";
$data_keluarga =  query("SELECT * FROM tb_keluarga" );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tabel</title>
</head>

<body>
<h1>Daftar Keluarga</h1>
<a href="form.php">Tambah Data Keluarga</a>
<table border="1">
<tr>
<td>Id</td>
<td>Nama</td>
<td>Jenis Kelamin</td>
<td>ID Orang Tua</td>
<td>Aksi</td>
</tr>
<?php foreach($data_keluarga as $row ): ?>
<tr>
<td><?= $row["id"];?></td>
<td><?= $row["nama"];?></td>
<td><?= $row["jenis_kelamin"];?></td>
<td><?= $row["orang_tua"];?></td>
<td>

<a href="edit.php?id=<?= $row["id"];?>">Edit</a> |
<a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin dihapus ?');">Hapus</a>
</td>

</tr>
<?php endforeach ?>
</table>    
</body>
</html>