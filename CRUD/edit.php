<?php
require "crud.php";
$id = $_GET["id"];
$data =  query("SELECT * FROM tb_keluarga WHERE id = $id" );
$data_keluarga =  query("SELECT * FROM tb_keluarga WHERE id != $id" );

if(isset($_POST["submit"]) ) {
  
    if(editData($_POST) > 0){
       echo "
       <script>
       alert ('data berasil diupdate ! ');
       document.location.href = 'index.php';
       </script> ";
    } else {
     echo "
     <script>
     alert ('data gagal diupdate ! ');
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
    <input type="hidden" name="id" value = "<?= $data[0]["id"]?>">
    <li>
    <label for="nama">Nama : </label>
    <input type="text" name="nama" value = "<?= $data[0]["nama"]?>" require>
    
    </li>
    <li>
    <label for="nama">Jenis Kelamin : </label>
    <input type="radio" id="Laki-laki" name="jenis_kelamin" value="Laki-laki" required active>
    <label for="male">Laki-laki</label>
    <input type="radio" id="Perempuan" name="jenis_kelamin" value="Perempuan">
    <label for="female">Perempuan</label><br>
    </li>
    <li>
    <label for="nama">Orangtua : </label>
    <select name="orangtua">
        <option selected="selected" required> -- Pilih Data Orangtua -- </option>
                <?php foreach ($data_keluarga as $data) { ?>
                <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                <?php 
                 }
            ?>
    </select>
    </li>
    <br>
    <li>
    <button type="submit" name="submit">Submit</button>
    <a href="index.php">Back</a>
    </li>


    
    </ul>
      
    </form>
</body>
</html>