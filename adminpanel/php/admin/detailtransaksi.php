<?php
include_once '../config.php';

$idtransaksi = $_POST['idtransaksi'];

$detailshowdata = "SELECT * FROM table_sales WHERE id_transaksi='$idtransaksi'";
$resultdetail = $conn->query($detailshowdata);
$dataarr = [];

if ($resultdetail->num_rows > 0) {
    // output data of each row
    while ($rowdetail = $resultdetail->fetch_assoc()) {
        $dataarr = $rowdetail;
    }
}

print_r($dataarr['detail_transaksi']);
