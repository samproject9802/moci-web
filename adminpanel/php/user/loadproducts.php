<?php
include_once '../config.php';

$show     = "SELECT a.id_produk, a.kode_produk, a.nama_produk, b.min_sale, b.discount, b.valid_date, b.unvalid_date, a.harga FROM `table_produk` as a 
            INNER JOIN `table_discount` as b 
            WHERE a.nama_produk = b.nama_produk";
$result = $conn->query($show);

if ($result->num_rows > 0) {
    $nomor = 1;
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
            <div class='col'>
                <a class='btn p-0' id='$row[kode_produk]$row[id_produk]' data-nama='$row[nama_produk]' data-harga='$row[harga]' data-sale='$row[min_sale]' data-discount='$row[discount]' data-valid='$row[valid_date]' data-unvalid='$row[unvalid_date]' onclick='goDoSomething(this);'>
                    <div class='card'>
                        <img src='assets/upload/$row[nama_produk].jpg' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'><b>$row[nama_produk]</b></h5>
                        </div>
                    </div>
                </a>
            </div>
            ";
        $nomor++;
    }
} else {
    echo "
        <div class='col'>
                <div class='card'>
                    <img src='...' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>Card title</h5>
                    </div>
                </div>
            </div>
        ";
}
