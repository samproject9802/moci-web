<?php
session_start();

require_once '../config.php';

$task = $_POST['task'];
$namaKasir = $_SESSION['nama'];
$tanggalNow = date('d');
$bulanNow = date('m');
$tahunNow = date('Y');
$jamNow = date('H');
$menitNow = date('i');
$detikNow = date('s');
$dateNow = $tahunNow."-".$bulanNow."-".$tanggalNow;
$idtrx = $tahunNow.$bulanNow.$tanggalNow.$jamNow.$menitNow.$detikNow;

if ($task == "inputDataCash") {
    $type = $_POST['type'];
    $value = $_POST['value'];
    $description = $_POST['description'];

    $sqlInsert = "INSERT INTO `table_cash` (id_trx,type,value,description,kasir)
                VALUES ('$idtrx','$type','$value','$description','$namaKasir')";
    $conn->query($sqlInsert);

    if ($conn->query($sqlInsert) == TRUE) {
        echo "Sukses";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else if ($task == "selectData") {
    $sql = "SELECT id_trx, type, value, description FROM `table_cash`";
    $result = $conn->query($sql);
    $dataCash = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $dataCash[] = $row;
        }
        echo json_encode($dataCash);
    }
}
?>