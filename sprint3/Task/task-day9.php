<?php
// "das","asd","dwqwe","oiqwj","fsdo","gutri","tanpa"
$daftar=[];
$daftar1=$daftar;
Menu:
var_dump($daftar);
echo "=============== Menu ===============\n1. Tambah List.\n2. Ubah List.\n3. Hapus List.\n4. Exit.\nMasukkan Nomor Menu : ";
$menu=trim(fgets(STDIN));
is_numeric($menu);
$count02=count($daftar);
for($count01=count($daftar)+1;;++$count01)

if ($menu==1){
    add_list();
    goto Menu;
} elseif ($menu==2){
    edit_list();
    goto Menu;
} elseif ($menu==3){
    delete_list("");
    goto Menu;
} elseif ($menu==4){
    echo "See You Later.".PHP_EOL;
    exit;
} elseif (!is_numeric($menu) or is_string($menu)){
    echo "Input Invalid\n";
    goto Menu;
}

function add_list(){
    global $daftar,$count01;
    echo "Masukkan Data :\n";
    $input=trim(fgets(STDIN));
    echo "\n";
    $daftar[$count01]=$input;
}

function edit_list(){
    global $daftar,$daftar1,$count02;
    if($daftar1!=$daftar){
        echo "=============== List ===============\n";
        foreach($daftar as $key => $value){
            echo $key.". ".$value.PHP_EOL;
        }
        var_dump($daftar);
        list_fc:
        echo "List yang Ingin Di Edit : ";
        $edit=trim(fgets(STDIN));
        if($edit<=$count02){
            echo "Masukkan Data Baru :\n";
            $edited=trim(fgets(STDIN)); 
        }elseif($edit!=$count02){
            echo "\nInvalid Input!!!!\n";
            goto list_fc;
        }
        $daftar[$edit]=$edited;
    }elseif ($daftar1==$daftar){
            echo "Input Invalid!!\n";
    }
}

function delete_list($delete){
    global $daftar,$daftar1,$count02;
    if($daftar1!=$daftar){
        echo "=============== List ===============\n";
        foreach($daftar as $key => $value){
            echo $key.". ".$value.PHP_EOL;
        }
        list_fc:
        echo "List yang Ingin Di Delete : ";
        $delete=trim(fgets(STDIN));
        if(is_numeric($delete) and $delete<=$count02){
            echo "Anda akan mengdelete $daftar[$delete]\n";
            // $count03=$daftar[$count02>=$daftar[$delete]];
            // unset($daftar[$delete]);
            // $daftar[$delete]=$daftar[$delete+$count03];
            // unset($daftar[$delete]);
            // $daftar=$daftar[$count03-1;
            for($i=$delete;$i<count($daftar);$i++){
                $daftar[$i]=$daftar[$i+1];
            }
            unset($daftar[count($daftar)]);
        }elseif(!is_numeric($delete and $delete!=$key)){
            echo "\nInvalid Input!!!!!!!!\n";
            goto list_fc;
        }
        // var_dump($daftar);
        var_dump($count02).PHP_EOL;
    }elseif ($daftar1==$daftar){
        echo "Input Invalid!\n";
    }
    
}

