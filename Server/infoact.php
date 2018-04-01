<?php  
    include_once("conne.php");
    $sql = "SELECT * FROM aktifitas ORDER BY NO DESC LIMIT 1 ";
	$hasil = mysqli_query($dbc, $sql);
	$baris = mysqli_fetch_row($hasil);
	if ($baris) {
		$no	    = $baris[0];
		$feed	= $baris[1];
		$cleaner= $baris[2];
		$light	= $baris[3];
		$pump	= $baris[4];
		
		print("feed, $feed\n");
		print("cleaner, $cleaner\n");
		print("light, $light\n");
		print("pump, $pump\n");

	}else
		print("Error non found\n");
		exit;
?>