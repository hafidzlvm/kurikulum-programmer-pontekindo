<?php 
require_once 'conn.php';

class Database extends Connection{
    
    public function addNew($jenis, $jumlah){
        $sql = "INSERT INTO $jenis (jumlah) VALUES ('$jumlah')";
        $stmt =  $this->conn->prepare($sql);
        $stmt-> execute();
        return $stmt;
    }
    public function readAll(){
        $sql = "SELECT
        t.id AS id,
        t.jenis_transaksi AS jenis_t,
        COALESCE(p.jumlah, peng.jumlah) AS jumlah,
        COALESCE(p.id, peng.id) AS id_p_pg,
        COALESCE(p.tanggal, peng.tanggal) AS tanggal_t
    
        FROM
            transaksi t
        LEFT JOIN
            pemasukan p ON t.id_pemasukan = p.id
        LEFT JOIN
            pengeluaran peng ON t.id_pengeluaran = peng.id";

        $stmt =  $this->conn->prepare($sql);
        $stmt-> execute();
        return $stmt;
    }
    public function readOne($id){
        $sql = "SELECT
        t.id AS id,
        t.jenis_transaksi AS jenis_t,
        COALESCE(p.jumlah, peng.jumlah) AS jumlah,
        COALESCE(p.id, peng.id) AS id_p_pg,
        COALESCE(p.tanggal, peng.tanggal) AS tanggal_t
    
        FROM
            transaksi t
        LEFT JOIN
            pemasukan p ON t.id_pemasukan = p.id
        LEFT JOIN
            pengeluaran peng ON t.id_pengeluaran = peng.id
            
        WHERE t.id = $id";

        $stmt =  $this->conn->prepare($sql);
        $stmt-> execute();
        // var_dump($stmt);
        $result = $stmt->fetch();
        return $result;
    }
    public function update($id, $jenis, $jumlah){
        $sql = "UPDATE $jenis SET jumlah = '$jumlah', tanggal = CURRENT_TIMESTAMP WHERE id = '$id'";
        $stmt =  $this->conn->prepare($sql);
        $stmt-> execute();
        return true;
    }
    public function delete($id, $jenis){
        $sql = "DELETE FROM $jenis WHERE id = '$id'";
        $stmt =  $this->conn->prepare($sql);
        $stmt-> execute();
        return true;
    }
    public function saldo(){
        $sql = "SELECT * FROM view_saldo";
        $stmt =  $this->conn->prepare($sql);
        $stmt-> execute();
        $result = $stmt->fetch();
        return $result;
    }
}

?>