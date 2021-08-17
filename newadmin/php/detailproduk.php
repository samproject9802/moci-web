<?php
require_once 'koneksi.php';

$task = $_POST['task'];

if ($task == "selectDataAllProduk") {

    $sql = "SELECT * FROM `table_produk`";
    $result = $conn->query($sql);
    $dataBarangPrd = [];

    if ($result->num_rows > 0) {
        $nomor = 0;
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $dataBarangPrd[] = $row;
            $nomor++;
        }
        echo json_encode($dataBarangPrd);
    }

}
?>