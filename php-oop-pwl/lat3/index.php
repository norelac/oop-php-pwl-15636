<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$matkul_1 = new MataKuliah();
$matkul_2 = new MataKuliah();

$matkul_1->setData("A11.12345", "Pemrograman Berbasis Web");
$matkul_2->setData("A11.12346", "Pemrograman Web Lanjut");

$mahasiswa_1->setData("A11.2024.15636", "Muhammad Iqbal Junialdi", [$matkul_1, $matkul_2], "2005-03-03");

echo "<pre>";
echo "Umur dihitung dengan method/function : <br>";
print_r($mahasiswa_1->getData()[4]);
echo "<br><br>";
echo "Nilai umur diberi langsung : <br>";
$mahasiswa_1->umur = 100;
print_r($mahasiswa_1->umur);
echo "</pre>";
