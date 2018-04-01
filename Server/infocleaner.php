<?php  
    include_once("conne.php");
    $sql = "SELECT * FROM cleanerlog ORDER BY WAKTU DESC LIMIT 1 ";
	$hasil = mysqli_query($dbc, $sql);
	$baris = mysqli_fetch_row($hasil);
	if ($baris) {
		$no			= $baris[0];
		$cleaner	= $baris[1];
		print("cleaner, $cleaner\n");
	}else
		print("Error non found\n");
		exit;
?>