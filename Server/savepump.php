
			<?php 
			include_once("conne.php");
			$ok = true;
			if (!isset($_GET['pump']))
				$ok = false;
			if (!$ok){
				print("salah penggunaan!");
				exit();
			}
			$pump =$_GET['pump'];
			$sql = "INSERT INTO pumplog (PUMP)"."VALUES ('". $pump."');";
			$hasil = mysqli_query($dbc, $sql);
			if ($hasil) {
				print("Data berhasil di simpan");

			}else
			print("Data Gagal di simpan");
				
				exit();
			
			?>