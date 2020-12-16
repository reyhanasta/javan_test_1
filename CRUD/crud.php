<?php
$conn = mysqli_connect("localhost","root","","javan_test");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[];

    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}


function tambahData($data){
    global $conn;
    $id = htmlspecialchars($data["id"]); 
   $nama = htmlspecialchars($data["nama"]); 
   $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]); 
   $orangtua = htmlspecialchars($data["orangtua"]); 

   $query = "INSERT INTO tb_keluarga values ('$id','$nama','$jenis_kelamin','$orangtua')";


   mysqli_query($conn,$query);

   return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn,"DELETE FROM tb_keluarga WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function editData($data){
    global $conn;
    $id = $data["id"]; 
   $nama = htmlspecialchars($data["nama"]); 
   $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]); 
   $orangtua = htmlspecialchars($data["orangtua"]); 

   $query = "UPDATE tb_keluarga SET 
   id = '$id', 
   nama = '$nama',
   jenis_kelamin = '$jenis_kelamin',
   orang_tua = '$orangtua'
   
   WHERE id = $id;";


   mysqli_query($conn,$query);

   return mysqli_affected_rows($conn);

}
?>