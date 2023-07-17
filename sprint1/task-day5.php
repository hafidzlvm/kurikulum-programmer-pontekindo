<?php

do {
echo "=== Aplikasi Penyewa Buku ===\n";    
echo "=========== Menu ============\n";
echo "1. Sewa Buku.\n";
echo "2. Keluar Aplikasi.\n";
echo "Pilih Menu : \n";
$menu=(int)trim(fgets(STDIN));
if ($menu=="1"){
    do {
    echo "Masukkan Nama Anda : ";
    $nama=trim(fgets(STDIN));
    echo "Masukkan Nama Buku : ";
    $nama_buku=trim(fgets(STDIN));
    echo "Batas Hari Penyewaan : ";
    $batas_penyewaan=trim(fgets(STDIN));
    echo "Jumlah Hari Penyewaan : ";
    $waktu_penyewaan=trim(fgets(STDIN));
    $telambat=$waktu_penyewaan-$batas_penyewaan;
    switch ($telambat){
        case $telambat>0:
            echo "Jumlah Hari Keterlambatan : $telambat\n";
            break;
        default:
            echo "Jumlah Hari Keterlambatan : 0 \n";
            break;
    }
    switch ($telambat){
        case $telambat>0:
            $denda=7000*$telambat; // Denda 7k
            echo "Denda : $denda Rp\n";
            break;
        default:
            $denda=0;
            echo "Denda : 0 Rp \n";
            break;
    }
    $harga=5000; // Harga buku 5k
    switch ($batas_penyewaan){
        case $batas_penyewaan>$waktu_penyewaan:
            $harga*=$waktu_penyewaan;
            echo "Total Harga Penyewaan $harga Rp\n";
            break;
        case $batas_penyewaan<$waktu_penyewaan:
            $harga*=$batas_penyewaan;
            echo "Total Harga Penyewaan : $harga Rp\n";
            break;
        default:
            $harga*=$batas_penyewaan;
            echo "Total Harga Penyewaan : $harga Rp\n";
            break;
    }
    $total=0;
    $total+=$denda; 
    $total+=$harga;
    echo "Total Harga Pembayaran : $total Rp\n";
    echo "\n";
    echo "Sewa Buku lagi Y/n ? ";
    $menu=trim(fgets(STDIN));

    } while ($menu=="1" or $menu=="Y" or $menu=="y");
} elseif ($menu=="2"){
    echo "=== See You Next Time ===\n";
    exit;
}
} while ($menu=="1");