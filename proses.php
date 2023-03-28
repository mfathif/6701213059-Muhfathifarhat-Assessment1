<?php
// ambil data dari form
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

// hitung hasil
if ($operator == '+') {
	$hasil = $angka1 + $angka2;
} else if ($operator == '-') {
	$hasil = $angka1 - $angka2;
} else if ($operator == '*') {
	$hasil = $angka1 * $angka2;
} else if ($operator == '/') {
	$hasil = $angka1 / $angka2;
}

// tampilkan hasil
echo "Hasil perhitungan: $angka1 $operator $angka2 = $hasil";
?>