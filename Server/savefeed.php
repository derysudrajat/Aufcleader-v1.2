
			<?php 
			include_once("conne.php");
			$ok = true;
			if (!isset($_GET['feed']))
				$ok = false;
			if (!$ok){
				print("salah penggunaan!");
				exit();
			}
			$feed =$_GET['feed'];
			$sql = "INSERT INTO feedlog (FEED)"."VALUES ('". $feed."');";
			$hasil = mysqli_query($dbc, $sql);
			if ($hasil) {
				print("Data berhasil di simpan");

			}else
			print("Data Gagal di simpan");
				
				exit();
			
			?>