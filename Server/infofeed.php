<?php  
    include_once("conne.php");
    $sql = "SELECT * FROM feedlog ORDER BY WAKTU DESC LIMIT 1 ";
	$hasil = mysqli_query($dbc, $sql);
	$baris = mysqli_fetch_row($hasil);
	if ($baris) {
		$no			= $baris[0];
		$feed		= $baris[1];
		print("feed, $feed\n");
	}else
		print("Error non found\n");
		exit;
?>