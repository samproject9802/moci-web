<?php
include_once '../config.php';

$sql = "SELECT * FROM table_produk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<option selected value=''>Pilih user...</option>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<option value='$row[nama_produk]'>$row[nama_produk]</option>";
    }
} else {
    echo "<option value=''>Empty</option>";
}
