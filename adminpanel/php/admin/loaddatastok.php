<?php
include_once '../config.php';

$namauser = $_POST['namauser'];

$sqlstockist = "SELECT * FROM table_stockist WHERE input_by='$namauser'";
$result = $conn->query($sqlstockist);

if ($result->num_rows > 0) {
    $nomor = 1;
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr class='text-center'>
            <td>$nomor</td>
            <td>$row[nama_produk]</td>
            <td>$row[jumlah_stok]</td>
            <td>$row[input_by]</td>
            <td>$row[tanggal_input]</td>
        </tr>
        ";
        $nomor++;
    }
} else {
    echo "
        <tr class='text-center'>
            <td colspan='5'>No Data Available</td>
        </tr>
        ";
}
