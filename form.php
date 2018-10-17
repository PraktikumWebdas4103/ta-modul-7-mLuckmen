<?php
	include 'koneksi.php';
?>
<form action="" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jenisKel" value="Laki-laki">Laki-laki
				<input type="radio" name="jenisKel" value="Perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>
				<select name="prodi">
					<option value="">Pilih Program Studi</option>
					<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
					<option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
					<option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
					<option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
					<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
					<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
					<option value="D3 Perhotelan">D3 Perhotelan</option>
					<option value="D3 Sistem Multimedia">D3 Sistem Multimedia</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
					<option value="">Pilih Fakultas</option>
					<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
					<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
					<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
					<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
					<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
					<option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option>
					<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td>
				<input type="text" name="asal">
			</td>
		</tr>
		<tr>
			<td>Motto Hidup</td>
			<td>:</td>
			<td>
				<input type="textarea" name="motto">
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Simpan">
				<button formaction="datamhs.php">Lihat Data</button>
			</td>
		</tr>
	</table>
</form>
<?php
	if (isset($_POST['simpan'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jenisKel = $_POST['jenisKel'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$motto = $_POST['motto'];

		// echo $nama.$nim.$jenisKel.$prodi.$fakultas.$asal.$motto;
		$sql = "INSERT INTO mahasiswa (nama, nim, jeniskel, prodi, fakultas, asal, motto)
		VALUES ('$nama', '$nim', '$jenisKel', '$prodi', '$fakultas', '$asal', '$motto')";

		$query = mysqli_query($conn, $sql);

		if ($query) {
			echo "Data berhasil dimasukkan";
		}else{
			echo "Data gagal dimasukkan".mysqli_error();
		}
	}
?>