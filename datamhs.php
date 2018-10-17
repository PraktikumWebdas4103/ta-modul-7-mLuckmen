<?php
	include 'koneksi.php';

	$select = "SELECT * FROM mahasiswa";
	$query1 = mysqli_query($conn, $select);

	
?>
<style type="text/css">
	.yellow {
		background-color: yellow;
	}
</style>
<form method="POST">
	<table>
		<tr>
			<td>
				<button formaction="form.php">Input Data</button>
			</td>
			<td></td>
			<td>
				<input type="text" name="carinim" placeholder="NIM">
				<input type="submit" name="cari" value="Cari">
			</td>
		</tr>
		<table border="1" width="1000px">
			<legend><h2>List data Mahasiswa</h2></legend>
			<tr>
				<th height="30px">Nama</th>
				<th>NIM</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Motto Hidup</th>
				<th>Aksi</th>
			</tr>
			<?php if (mysqli_num_rows($query1) > 0) {
				while ($row = mysqli_fetch_array($query1)) {  ?>
				<tr>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['nim'] ?></td>
					<td><?php echo $row['jenisKel'] ?></td>
					<td><?php echo $row['prodi'] ?></td>
					<td><?php echo $row['fakultas'] ?></td>
					<td><?php echo $row['asal'] ?></td>
					<td><?php echo $row['motto'] ?></td>
					<td align="center">
						<a href="delete.php?nim=<?php echo $row['nim']?>" onclick='return confirm("Apakah anda yakin..?");'>Delete</a> |
						<a href="detail.php">Detail</a>
					</td>
				</tr>
			<?php } }?>
		</table>
	</table>
</form>
<?php
	if (isset($_POST['cari'])) {
		$carinim = $_POST['carinim'];
		$cari = "SELECT * FROM mahasiswa WHERE nim LIKE '%$carinim%'";
		$query2 = mysqli_query($conn, $cari);

		if ($query2) {
			echo "Data Ditemukan<br>";

			?>
			<table border="1" width="1000px">
				<tr>
					<th height="30px">Nama</th>
					<th>NIM</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>Fakultas</th>
					<th>Asal</th>
					<th>Motto Hidup</th>
				</tr>
				<?php while ($row = mysqli_fetch_array($query2)) {  ?>
				<tr class="yellow">
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['nim'] ?></td>
					<td><?php echo $row['jenisKel'] ?></td>
					<td><?php echo $row['prodi'] ?></td>
					<td><?php echo $row['fakultas'] ?></td>
					<td><?php echo $row['asal'] ?></td>
					<td><?php echo $row['motto'] ?></td>
				</tr>
			<?php } ?>
			</table>
			<?php
		}else{
			echo "Data Tidak Ditemukan";
		}
	}
?>