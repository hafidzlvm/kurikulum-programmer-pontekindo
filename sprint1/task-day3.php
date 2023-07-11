<?php
echo "------------ Menghitung Jajargenjang ------------\n";
echo "Ketikkan Alas Jajargenjang = ";
$alasJ = trim (fgets(STDIN));
echo "Ketikkan Tinggi Jajargenjang = ";
$tinggiJ = trim (fgets(STDIN));
echo "Ketikkan Sisi Miring = ";
$miringJ = trim (fgets(STDIN));
$kelilingJ = 2*($alasJ+$miringJ);
$luasJ = $alasJ*$tinggiJ;
echo PHP_EOL;

echo "Luas = Alas * Tinggi
Luas = $alasJ * $tinggiJ
Luas = $luasJ\n";
echo "Keliling = 2 * (Alas + Sisi Miring)
Keliling = 2 * ($alasJ + $miringJ)
Keliling = $kelilingJ".PHP_EOL;
echo "\n";
echo "\n";
echo "\n";


echo "------------ Menghitung Belah Ketupat ------------\n";
echo "Ketikkan Sisi AB Belah Ketupat = ";
$sisi1B = trim (fgets(STDIN));
echo "Ketikkan Sisi CD Belah Ketupat = ";
$sisi2B = trim (fgets(STDIN));
echo "Ketikkan Diagonal 1 Belah Ketupat = ";
$diagonal1B = trim (fgets(STDIN));
echo "Ketikkan Diagonal 2 Belah Ketupat = ";
$diagonal2B = trim (fgets(STDIN));
$kelilingB = 2 * ($sisi1B*$sisi2B);
$luasB = 1/2*$diagonal1B*$diagonal2B;
echo PHP_EOL;


echo "Luas = 1/2 * Diagonal 1 * Diagonal 2
Luas = 1/2 * $diagonal1B * $diagonal2B
Luas = $luasB\n";
echo "Keliling = 2 * ( AB + CD )
Keliling = 2 * $sisi1B + $sisi2B
Keliling = $kelilingB".PHP_EOL;
echo "\n";
echo "\n";
echo "\n";



echo "------------ Menghitung Layang-layang ------------\n";
echo "Ketikkan Sisi AB Layang-layang = ";
$sisi1L = trim (fgets(STDIN));
echo "Ketikkan Sisi CD Layang-layang = ";
$sisi2L = trim (fgets(STDIN));
echo "Ketikkan Diagonal 1 Layang-layang = ";
$diagonal1L = trim (fgets(STDIN));
echo "Ketikkan Diagonal 2 Layang-layang = ";
$diagonal2L = trim (fgets(STDIN));
$kelilingL = 2 * ( $sisi1L + $sisi2L);
$luasL = 1/2*$diagonal1L*$diagonal2L;
echo PHP_EOL;

echo "Luas = 1/2 * Diagonal 1 * Diagonal 2
Luas = 1/2 * $diagonal1L * $diagonal2L
Luas = $luasL\n";
echo "Keliling = 2 * ( AB + CD )
Keliling = 2 * ( $sisi1L + $sisi2L )
Keliling = $kelilingL".PHP_EOL;
echo "\n";
echo "\n";
echo "\n";



echo "------------ Menghitung Trapesium ------------\n";
echo "Ketikkan Sisi AB / Sisi Sejajar A Trapesium = ";
$sisi1T = trim (fgets(STDIN));
echo "Ketikkan Sisi CD / Sisi Sejajar B Trapesium = ";
$sisi2T = trim (fgets(STDIN));
echo "Ketikkan Sisi BC Trapesium = ";
$sisi3T = trim (fgets(STDIN));
echo "Ketikkan Sisi AD Trapesium = ";
$sisi4T = trim (fgets(STDIN));
echo "Ketikkan Tinggi Trapesium = ";
$tinggiT = trim (fgets(STDIN));
echo PHP_EOL;

$kelilingT = $sisi1T+$sisi2T+$sisi3T+$sisi4T;
$luasT = (($sisi1T+$sisi2T)*$tinggiT)/2;

echo "Luas = Luas Segitiga ABC + Luas Segitiga ACD
Luas = (( Panjang Sisi Sejajar A + Panjang Sisi Sejaja B ) * Tinggi ) / 2
Luas = (( $sisi1T + $sisi2T ) * $tinggiT ) / 2
Luas = $luasT\n";
echo "Keliling = AB + BC + CD + AD
Keliling = $sisi1T + $sisi2T + $sisi3T + $sisi4T
Keliling = $kelilingT".PHP_EOL;


