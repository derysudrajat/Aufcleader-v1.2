<?php  
    include_once("conne.php");
    $sql = "SELECT * FROM sensorDHT11 ORDER BY WAKTU DESC LIMIT 1 ";
	$hasil = mysqli_query($dbc, $sql);
	$baris = mysqli_fetch_row($hasil);
	if ($baris) {
		$id_data	= $baris[0];
		$waktu		= $baris[1];
		$suhu		= $baris[2];
		$kelembaban	= $baris[3];

		print("waktu, $waktu\n");
		print("suhu, $suhu\n");
		print("kelembaban, $kelembaban\n");

	}else
		print("Error non found\n");
		exit;
?>