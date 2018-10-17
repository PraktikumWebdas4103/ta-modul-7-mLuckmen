<?php
	$host	= 'localhost';
	$user	= 'root';
	$pass	= '';
	$db		= '6701174014';

	$conn = mysqli_connect($host, $user, $pass, $db);

	if (!$conn) {
		echo "Connection Failure".mysqli_error();
	}

?>