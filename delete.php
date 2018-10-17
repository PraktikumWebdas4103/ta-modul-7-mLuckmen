<?php
	include('koneksi.php');

	if (isset($_GET['nim'])) {
		$id = $_GET['nim'];

		$sql = "DELETE FROM mahasiswa WHERE nim='$id'";
		$query = mysqli_query($conn, $sql);

		if ($query) {
			header('Location: datamhs.php');
		}else{
			die("Gagal Menghapus");
		}
	}else{
		die("Akses dilarang");
	}
?>