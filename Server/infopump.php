<?php  
    include_once("conne.php");
    $sql = "SELECT * FROM pumplog ORDER BY WAKTU DESC LIMIT 1 ";
	$hasil = mysqli_query($dbc, $sql);
	$baris = mysqli_fetch_row($hasil);
	if ($baris) {
		$no			= $baris[0];
		$pump		= $baris[1];
		print("pump, $pump\n");
	}else
		print("Error non found\n");
		exit;
?>