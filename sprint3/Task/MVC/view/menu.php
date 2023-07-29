<?php
    include_once "../helper/input.php";
    function app(){
        global $data,$data1;
        while(true){
            // viewRead();
            var_dump($data);
            echo "----- Todolist.app Menu -----\n";
            echo "1. Buat List.\n";
            echo "2. Edit List.\n";
            echo "3. Hapus List.\n";
            echo "4. Keluar App.\n";
            echo "Masukkan nomor menu : ";
            $menu=input();
            if($menu=="1"){
                viewCreate();
            }elseif($menu=="2"&&$data!=$data1){
                // if($data!=$data1){
                //     viewUpdate();
                // }elseif($data==$data1){
                //     echo "Invalid Input\n";
                // }
                viewUpdate();
            }elseif($menu=="3"&&$data!=$data1){
                // if($data!=$data1){
                //     viewDelete();
                // }elseif($data==$data1){
                //     echo "Invalid Input\n";
                // }
                viewDelete();
            }elseif($menu=="4"){
                echo "See you later ";
                exit;
            }else{
                echo "Invalid Input!".PHP_EOL;
            }
        }
    }
?>