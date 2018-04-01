<?php  
    include_once("conne.php");
    $sql = "SELECT * FROM lightlog ORDER BY WAKTU DESC LIMIT 1 ";
	$hasil = mysqli_query($dbc, $sql);
	$baris = mysqli_fetch_row($hasil);
	if ($baris) {
		$no			= $baris[0];
		$light		= $baris[1];
		print("light, $light\n");
	}else
		print("Error non found\n");
		exit;
?>