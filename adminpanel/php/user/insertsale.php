<?php
session_start();

include_once '../config.php';

date_default_timezone_set("Asia/Jakarta");

$nama = $_SESSION['nama'];
$detailtransaksi = $_POST['detail'];
$current_date = date("Y-m-d");
$current_time = date("H:i:s");
$timenow = "$current_date" . " " . "$current_time";
$subtotal = mysqli_real_escape_string($conn, $_POST['subtotal']);
$pajak = mysqli_real_escape_string($conn, $_POST['pajak']);
$total = mysqli_real_escape_string($conn, $_POST['total']);
$bayar = mysqli_real_escape_string($conn, $_POST['bayar']);
$kembalian = mysqli_real_escape_string($conn, $_POST['kembalian']);

$sql = "INSERT INTO table_sales
        VALUES ('', '$detailtransaksi', '$subtotal', '$pajak', '$total', '$bayar', '$kembalian', '$timenow','$nama')";

if ($conn->query($sql) == true) {
    echo "Success";
} else {
    echo "Error";
};
