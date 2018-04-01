
			<?php 
			include_once("conne.php");
			$ok = true;
			if (!isset($_GET['feed']))
				$ok = false;
			if (!isset($_GET['cleaner']))
				$ok = false;
			if (!isset($_GET['light']))
				$ok = false;
			if (!isset($_GET['pump']))
				$ok = false;
			if (!$ok){
				print("salah penggunaan!");
				exit();
			}
			
			$feed =$_GET['feed'];
			$cleaner =$_GET['cleaner'];
			$light =$_GET['light'];
			$pump =$_GET['pump'];

			$sql = UPDATE `aktifitas` SET FEED="'". $feed."'",CLEANER="'". $cleaner."'",LIGHT="'". $light."'",PUMP="'". $pump."'" WHERE NO= 1;
			$hasil = mysqli_query($dbc, $sql);
			if ($hasil) {
				print("Data berhasil di simpan");

			}else
			print("Data Gagal di simpan");
				
				exit();
			
			?>