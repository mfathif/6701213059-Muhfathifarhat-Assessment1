<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
</head>
<body>
	<form method="post">
		<input type="number" name="angka1" placeholder="Masukkan angka pertama"><br>
		<input type="number" name="angka2" placeholder="Masukkan angka kedua"><br>
		<select name="operator">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="kali">*</option>
			<option value="bagi">/</option>
		</select><br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	<?php
		if(isset($_POST['submit'])){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			$operator = $_POST['operator'];

			switch($operator){
				case "tambah":
					$hasil_angka = $angka1 + $angka2;
					break;
				case "kurang":
					$hasil_angka = $angka1 - $angka2;
					break;
				case "kali":
					$hasil_angka = $angka1 * $angka2;
					break;
				case "bagi":
					$hasil_angka = $angka1 / $angka2;
					break;
			}

			echo "<br>Hasil perhitungan: ".$hasil_angka;
		}
	?>
</body>
</html>