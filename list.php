<?php
require_once("db.php");
?>
<html>
<body>
<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Action</th>
		</tr>
		<?php
            $sql = "SELECT * FROM siswa";

            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);

            if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
				<td><?php echo $row['NIM']?></td>
				<td><?php echo $row['Nama']?></td>
				<td><?php echo $row['tgl_lahir']?></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">Hapus</a> | <a href="update.php?id=<?php echo $row['id']?>">Update</a></td>
				</tr>
				<?php
			}
		}else {
			echo "0 Result";
		}
		mysqli_close($conn);
        ?>
?> 
</table>
</body>
</html>
<h3><a href="form.php">ISI FORM</a></h3>
