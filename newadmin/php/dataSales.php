<?php
require_once 'koneksi.php';

$idtransaksi = $_POST["idtransaksi"];
$tugas = $_POST["tugas"];

if (isset($tugas)) {
    if ($tugas == "selectSpecificData") {
        $sqlselectsales = "SELECT (detail_transaksi) FROM table_sales WHERE id_transaksi='$idtransaksi'";
        $resultselectsales = $conn->query($sqlselectsales);
        $dataSales = array();

        if ($resultselectsales->num_rows > 0) {
            // output data of each row
            while ($rowselect = $resultselectsales->fetch_assoc()) {
                $dataSales[] = $rowselect;
            }
            echo json_encode($dataSales);
        } else {
            $dataSales[] = $rowselect;
        }
    } else if ($tugas == "selectAllData") {
        $sqlselectsales = "SELECT * FROM table_sales";
        $resultselectsales = $conn->query($sqlselectsales);
        $dataSales = array();

        if ($resultselectsales->num_rows > 0) {
            // output data of each row
            while ($rowselect = $resultselectsales->fetch_assoc()) {
                $dataSales[] = $rowselect;
            }
            echo json_encode($dataSales);
        } else {
            $dataSales[] = $rowselect;
        }
    } else if ($tugas == "deleteData") {
        $sqldeleteDataSales = "DELETE FROM table_sales WHERE id_transaksi='$idtransaksi'";
        if ($conn->query($sqldeleteDataSales) == TRUE) {
            echo "Sukses";
        } else {
            echo "Gagal";
        };
    }
}
