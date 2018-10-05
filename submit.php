<?php
require_once("db.php");


$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tgl_lahir = $_POST["tgl_lahir"];

$sql = "INSERT INTO siswa(nim,nama,tgl_lahir) VALUES('$nim','$nama','$tgl_lahir')";

if (mysqlI_query($conn, $sql)) {
    echo "New record created successfully<br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "Silahkan klik <a href='list.php'>link ini</a> SELANJUTNYA";
?> 
