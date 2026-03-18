<?php
include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2024.15636', 'Muhammad Iqbal Junialdi', 'Teknik Informatika');

$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2024.23454', 'Robert', 'Sistem Informasi');

$mahasiswaDKV = new Mahasiswa();
$mahasiswaDKV->setData('A13.2023.12231', 'Fahmi', 'Desain Komunikasi Visual');

echo "<h2>Data Mahasiswa:</h2>";

$mahasiswaTI->tampilData();
$mahasiswaSI->tampilData();
$mahasiswaDKV->tampilData();
?>