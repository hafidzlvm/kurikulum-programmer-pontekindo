<?php 

echo "---------- Menghitung Persegi Panjang ----------".PHP_EOL;
echo "Ketikkan Sisi Lebar : ";
$lebarp=trim(fgets(STDIN));
echo "Ketikkan Sisi Panjang : ";
$panjangp=trim(fgets(STDIN));

$luasp = $panjangp * $lebarp;
$kelilingp = 2*($panjangp+$lebarp);

echo "Luas = Panjang * Lebar ".PHP_EOL;
echo "Luas = $panjangp * $lebarp".PHP_EOL;
echo "Luas = $luasp".PHP_EOL;
echo "Keliling = 2 * (Panjang + Lebar)".PHP_EOL;
echo "Keliling = 2 * ($panjangp + $lebarp)".PHP_EOL;
echo "Keliling = $kelilingp".PHP_EOL;






echo "\n";
echo "---------- Menghitung Segitiga ----------".PHP_EOL;
echo "Ketikkan Sisi Tinggi / Sisi a : ";
$tinggi=trim(fgets(STDIN));
echo "Ketikkan Sisi Alas / Sisi b : ";
$alas=trim(fgets(STDIN));
echo "Ketikkan Sisi c : ";
$sisic=trim(fgets(STDIN));

$luast = 1/2 * ($alas * $tinggi);
$kelilingt = $alas + $tinggi + $sisic;

echo "Luas = 1/2 * Alas * Tinggi ".PHP_EOL;
echo "Luas = 1/2 * $alas * $tinggi".PHP_EOL;
echo "Luas = $luast".PHP_EOL;
echo "Keliling = Sisi a + Sisi b + Sisi c ".PHP_EOL;
echo "Keliling = $alas + $tinggi + $sisic ".PHP_EOL;
echo "Keliling = $kelilingt".PHP_EOL;




echo "\n";
echo "---------- Menghitung Lingkaran ----------".PHP_EOL;
echo "Ketikkan Jari-jari Lingkaran : ";
$r=trim(fgets(STDIN));

$a=3.14;
$luasl = $a * ($r ** $r);
$kelilingl = $a * 2 * $r;

echo "Luas = π * r^r ".PHP_EOL;
echo "Luas = π * $r^$r ".PHP_EOL;
echo "Luas = $luasl ".PHP_EOL;
echo "Keliling = π * 2 * r ".PHP_EOL;
echo "Keliling = π * 2 * $r ".PHP_EOL;
echo "Keliling = $kelilingl".PHP_EOL;


























