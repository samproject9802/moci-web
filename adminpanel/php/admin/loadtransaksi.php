<?php
include_once '../config.php';

$showtrans = "SELECT * FROM table_sales";
$result = $conn->query($showtrans);

if ($result->num_rows > 0) {
    $nomor = 1;
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr align='center'>
                <td>$nomor</td>
                <td>$row[id_transaksi]</td>
                <td>
                <button class='btn btn-primary' type='button' class='btn btn-primary' onClick='showdatatransaksi(this);' data-id='$row[id_transaksi]' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Lihat Detail</button>
                </td>
                <td>$row[subtotal]</td>
                <td>$row[pajak]</td>
                <td width='10%'>$row[total]</td>
                <td width='10%'>$row[bayar]</td>
                <td>$row[kembalian]</td>
                <td>$row[tanggal_transaksi]</td>
            </tr>
            ";
        $nomor++;
    }
} else {
    echo "
         <tr align='center'>
                <td colspan='9'>No Data Available</td>
            </tr>
        ";
}
