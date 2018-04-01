
			<?php 
			include_once("conne.php");
			$ok = true;
			if (!isset($_GET['cleaner']))
				$ok = false;
			if (!$ok){
				print("salah penggunaan!");
				exit();
			}
			$cleaner =$_GET['cleaner'];
			$sql = "INSERT INTO cleanerlog (CLEANER)"."VALUES ('". $cleaner."');";
			$hasil = mysqli_query($dbc, $sql);
			if ($hasil) {
				print("Data berhasil di simpan");

			}else
			print("Data Gagal di simpan");
				
				exit();
			
			?>