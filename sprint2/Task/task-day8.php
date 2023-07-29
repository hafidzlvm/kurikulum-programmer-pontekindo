<?php
a:
echo "========= JanKenPon Mini Game ==========\n";
echo "Anda siap untuk Bermain?? Y untuk iya n untuk tidak, atau anda sudah menyerah diawal! ";
satu: // GOTO ------------------
$a=trim(fgets(STDIN));
$a=strtoupper($a);
if($a=="Y"){
    echo "Peraturan Game : \n";
    echo "-Terdapat Batu, Gunting, Kertas.\n-Batu mengalahkan gunting.\n-Gunting mengalahkan kertas.\n-Kertas mengalahkan batu.\n";
    dua://GOTO -------------------
    echo "Anda Siap ??? Y/n! ";
    $b=strtoupper(trim(fgets(STDIN)));
    // echo PHP_EOL;
    if($b=="Y"){
        echo "Hmmm sepertinya anda sudah siap, okh baiklah.\n";
    } elseif($b=="N"){
        echo "Huftt sudah ku duga\n";
        exit;
    } else {
        echo "Invalid, salah masukin input itu. ";
        goto dua;
    }

    while(true){
        tanding_ulang_1: // GOTO ------------------
        echo "\n1. Batu.\n2. Gunting. \n3. Kertas.\nSilahkan pilih salah satu nomor : ";
        tanding_ulang_1_1:
        $d=trim(fgets(STDIN));
        $result=($d=="1") ?"Batu":(($d=="2")?"Gunting":(($d=="3")?"Kertas":"invalid"));
        echo "You : $result\t";echo "Me (Bot) : ";

        $jankenpon=["Batu","Gunting","Kertas"];
        shuffle($jankenpon);
        $comp=$jankenpon[0];
        echo $comp.PHP_EOL;
        if($d==1){
            if ($comp=="Batu"){
                echo "Seri";
                goto tanding_ulang_1;
            }elseif($comp=="Gunting"){
                echo "Wuihhh, Anda Menang";
            }elseif($comp=="Kertas"){
                echo "YAHAHAHA ,, Anda Kalah";
            }
        } elseif($d==2) {
            if ($comp=="Batu"){
                echo "Tidak Kali Ini,,, Selamat anda kalah";
            }elseif($comp=="Gunting"){
                echo "Seri";
                goto tanding_ulang_1;
            }elseif($comp=="Kertas"){
                echo "Selamat,, Anda Menang";
            }  
        } elseif($d==3){
            if ($comp=="Batu"){
                echo "Nooo, Saya Kalah";
            }elseif($comp=="Gunting"){
                echo "Yahaha, Selamat atas kekalahan nya";
            }elseif($comp=="Kertas"){
                echo "Seri".PHP_EOL;
                echo "Tanding Ulang? Y/n :";
                tanding_ulang_2: // GOTO --------------------
                $e=strtoupper(trim(fgets(STDIN)));
                if($e=="Y"){
                    goto tanding_ulang_1;
                } elseif ($e=="N"){
                    echo "Okh,,, Sampai bertemu Lagi";
                    exit;
                } else{
                    echo "Masukkan Inputan Yang benarr : [Y/n], Tanding ulang? :";
                    goto tanding_ulang_2;
                }
            }
        } else {echo "Masukkan INPUTAN yang benar : ";goto tanding_ulang_1_1;}
        echo "\n\n";
        echo "Tanding Lagi  Gakk ?? [Y/n]";
        lanjut: // GOTO------------------
        $f=strtoupper(trim(fgets(STDIN)));
        if($f=="Y"){
            goto tanding_ulang_1;
        } elseif ($f=="N"){
            echo "Good bye, Terimasih telah bermain";
            exit;
        } else{
            echo "Masukkan Inputan Yang benarr : [Y/n], Tanding ulang? :";
            goto lanjut;
        }
    };
}elseif($a=="N") {
echo "Look who is the winner\n";
} else{
echo "Masukkan Inputan Yang benar!! [Y/n] :\n";
goto satu;
}