
			<?php 
			// mysql_connect("localhost","root","") or die("Tidak bisa terkoneksi ke databases");
			// mysql_select_db("data");
			$link = mysqli_connect("localhost", "root", "", "data");
			// $link = mysqli_connect("databases.000webhost.com", "id4841422_dht", "auf1234", "id4841422_dht11");

			/* check connection */
			if (mysqli_connect_errno()) {
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}

			$query = 'select * from sensordht11';

			if ($result = mysqli_query($link, $query)) {
				// echo "<pre>";
				// while ($row = mysqli_fetch_array($result)) {
					
					// echo "<tr>
					// <td>$ambil[ID_DATA]</td>
					// <td>$ambil[WAKTU]</td>
					// <td>$ambil[SUHU]</td>
					// <td>$ambil[KELEMBABAN]</td>
					// </tr>";
					// printf("%s (%s)\n", $row[0], $row[1]);
					// printf("%s (%s) %s %s\n", $row['ID_DATA'], $row['WAKTU'], $row['SUHU'], $row['KELEMBABAN']);



				// }
				$row = mysqli_fetch_array($result);
				echo json_encode($row);
				// echo "</pre>";
			}

			?>