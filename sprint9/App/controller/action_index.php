<?php 
require_once "model/db.php";
require_once "model/util.php";

$db = new Database;
$util = new util;
if (isset($_POST['addNew'])) {
    $jumlah = $util->testInput($_POST['jumlah']);
    $jenis = $util->testInput($_POST['jenis']);
    if ($db->addNew($jenis, $jumlah)) {
        echo $util->showMessage2("Data successfully added");
    } else {
        echo $util->showMessage2("Something went wrong");
    }
}




if ( $db->readAll()->rowCount() > 0 ) {
    $i = 1;
    $users = $db->readAll();
    $output = "";

    foreach ($users as $data){
        $output .= "<tbody>
                        <tr class=''>
                            <td> $i </td>
                            <td>".$data->jenis_t."</td>
                            <td>".$data->jumlah."</td>
                            <td>".$data->tanggal_t."</td>
                            <td>
                              <a href='update.php?no=$i&id=$data->id' class='btn btn-primary'
                              >Ubah</a>
                              <a href='delete.php?no=$i&id=$data->id' class='btn btn-primary' onclick='return confirm('Anda akan menghapus No. $i');'>Hapus</a>
                            </td>
                        </tr>
                    </tbody>";
                    $i++;
                  }
    return $output;

    

} else {
    $output = '<tr>
              <td colspan="5">No Data Found in the Database!</td>
            </tr>';
    return $output;
}

if ($db->saldo()->saldo > 0) {
    return true;
} else {
  echo $util->showMessage2("danger", "Saldo tidak mencukupi!");
}


?>