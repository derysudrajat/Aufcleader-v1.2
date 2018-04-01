
			<?php 
			include_once("conne.php");
			$ok = true;
			if (!isset($_GET['light']))
				$ok = false;
			if (!$ok){
				print("salah penggunaan!");
				exit();
			}
			$light =$_GET['light'];
			$sql = "INSERT INTO lightlog (LIGHT)"."VALUES ('". $light."');";
			$hasil = mysqli_query($dbc, $sql);
			if ($hasil) {
				print("Data berhasil di simpan");

			}else
			print("Data Gagal di simpan");
				
				exit();
			
			?>