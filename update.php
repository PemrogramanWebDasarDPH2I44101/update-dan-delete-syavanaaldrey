<?php
    require_once("db.php");
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <form method="post">
        <tr>
            <td>
                NIM
            </td>
            <td>
                <input type="text" name="nim" value="<?php echo $row['nim'] ?>"><br><br>
            </td>
        <tr>
            <td>
                Nama
            </td>
            <td>
                <input type="text" name="nama" value="<?php echo $row['nama'] ?>"><br><br>
            </td>
        <tr>
            <td>
                Tanggal Lahir
            </td>
            <td>
                <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"><br><br>
            </td>
        <tr>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
        </form>
    </body>
</html>
<?php
    if (isset($_POST['nama'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $sql = "UPDATE siswa SET  nim='$nim',nama='$nama', tgl_lahir='$tgl_lahir' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            header("location: list.php");
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>