<?php
function app(){
    echo "=========== Aplikasi Input Data Santri ===========\n";
    while(true){
        viewRead();
        echo "~~~~~~~~~ Menu ~~~~~~~~~\n";
        echo "1. Create\n";
        echo "2. Edit\n";
        echo "3. Delete\n";
        echo "4. Exit\n";
        echo "~~~~~~~~~~~~~~~~~~~~~\n";
        echo "Masukkan pilihan: ";
        $pilihan = input();
        if($pilihan == "1"){
            viewCreate();
        }elseif($pilihan == "2"){
            viewUpdate();
        }elseif($pilihan == "3"){
            viewDelete();
        }elseif($pilihan == "4"){
            echo "Terimakasih\n";
            break;
        }else{
            echo "Pilihan tidak tersedia\n";
        }
    }
}