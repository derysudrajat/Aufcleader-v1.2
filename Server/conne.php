<?php 
DEFINE('DBUSER', 'id4841422_dht');
DEFINE('DBPW', 'auf1234');
DEFINE('DBHOST', 'localhost');
DEFINE('DBNAME', 'id4841422_dht11');

$dbc = mysqli_connect(DBHOST,DBUSER,DBPW,DBNAME);
if (!$dbc){
	die("Koneksi Gagal di lakukan: ".mysqli_error($dbc));
	exit();
}

?>