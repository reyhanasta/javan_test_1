<?php
require "crud.php";
$data_keluarga =  query("SELECT * FROM tb_keluarga" );
if(isset($_POST["submit"]) ) {
  

   if(tambahData($_POST) > 0){
      echo "
      <script>
      alert ('data berasil di tambahkan ! ');
      document.location.href = 'index.php';
      </script> ";
   } else {
    echo "
    <script>
    alert ('data gagal di tambahkan ! ');
    document.location.href = 'index.php';
    </script> ";
   }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Keluarga</title>
</head>
<body>
    <form action="" method="POST">
    <ul>
    <input type="hidden" name="id">
    <li>
    <label for="nama">Nama : </label>
    <input type="text" name="nama">
    </li>
    <li>
    <label for="nama">Jenis Kelamin : </label>
    <input type="radio" id="Laki-laki" name="jenis_kelamin" value="Laki-laki" required>
    <label for="male">Laki-laki</label>
    <input type="radio" id="Perempuan" name="jenis_kelamin" value="Perempuan">
    <label for="female">Perempuan</label><br>
    </li>
    <li>
    <label for="nama">Orangtua : </label>
    <select name="orangtua" require>
        <option selected="selected" require> -- Pilih Merek -- </option>
                <?php foreach ($data_keluarga as $data) { ?>
                <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                <?php 
                 }
            ?>
    </select>
    </li>
    <button type="submit" name="submit">Submit</button>
    <a href="index.php">Back</a>
    </ul>
      
    </form>
</body>
</html>