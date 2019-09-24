<html>
<head>
	<title>Program Penjumlahan</title>
</head>
<body>
	<form method="POST" action="tugas.php" name="formnya">
		Nilai A adalah : <input type="input" name="nilai_A" ></input><br><br>
		Nilai B adalah : <input type="input" name="nilai_B" ></input><br><br>
		<input type="submit" name="tombol" value="Jumlahkan" ></input>
	</form><br><br>
	<?php
		$nilaiA = $_POST['nilai_A'];
		$nilaiB = $_POST['nilai_B'];
		$Jumlahkan = $_POST['tombol'];
		$hasil = $nilaiA + $nilaiB;

		if($hasil % 2 == 0){
			echo "Nilai bilangan <b>Genap</b>, karena :<br>";
		}else{
			echo "Nilai bilangan <b>Ganjil</b>, karena :<br>";
		}

		if ($Jumlahkan) {
			echo "Nilai A adalah $nilaiA<br>";
			echo "Nilai B adalah $nilaiB<br>";
			echo "Jadi Nilai A ditambah Nilai B adalah $hasil";
		}
	?>
</body>
</html>