<?php
include_once 'php/config.php';

$sqlseltable = "SELECT a.id_produk,a.kode_produk,a.nama_produk,a.harga,b.min_sale,b.discount,b.valid_date,b.unvalid_date FROM `table_produk` as a 
                INNER JOIN `table_discount` as b 
                WHERE a.nama_produk = b.nama_produk";

$resulttable = $conn->query($sqlseltable);

echo "
<section class='content'>
    <ul class='nav nav-tabs' id='myTab' role='tablist'>
        <li class='nav-item' role='presentation'>
            <button class='nav-link active' id='produk-tab' data-bs-toggle='tab' data-bs-target='#produk' type='button' role='tab' aria-controls='produk' aria-selected='true'>Data Produk</button>
        </li>
        <li class='nav-item' role='presentation'>
            <button class='nav-link' id='stok-tab' data-bs-toggle='tab' data-bs-target='#stok' type='button' role='tab' aria-controls='stok' aria-selected='false'>Data Stok</button>
        </li>
    </ul>
    <div class='tab-content' id='myTabContent'>
        <div class='tab-pane fade show active' id='produk' role='tabpanel' aria-labelledby='produk-tab'>
            <section class='content'>
                <div class='card'>
                    <div class='card-header'>
                        <h3 class='card-title'>List Produk</h3>

                        <div class='card-tools'>
                            <button type='button' class='btn btn-tool' data-card-widget='collapse' title='Collapse'>
                                <i class='fas fa-minus'></i>
                            </button>
                        </div>
                    </div>
                    <div class='card-body p-0'>
                        <table class='table table-striped projects'>
                            <thead>
                                <tr>
                                    <th style='width: 1%'>
                                        ID
                                    </th>
                                    <th style='width: 10%'>
                                        Kode Produk
                                    </th>
                                    <th style='width: 10%'>
                                        Nama Produk
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                    <th style='width: 12%' class='text-center'>
                                        Min. Pembelian
                                    </th>
                                    <th style='width: 10%'>
                                        Discount
                                    </th>
                                    <th style='width: 20%'>
                                        Valid Discount
                                    </th>
                                    <th style='width: 20%'>
                                        Unvalid Discount
                                    </th>
                                </tr>
                            </thead>
                        <tbody>";

if ($resulttable->num_rows > 0) {
    // output data of each row
    while ($rowtable = $resulttable->fetch_assoc()) {
        echo "
                <tr>
                    <td>$rowtable[id_produk]</td>
                    <td>$rowtable[kode_produk]</td>
                    <td>$rowtable[nama_produk]</td>
                    <td>$rowtable[harga]</td>
                    <td>$rowtable[min_sale]</td>
                    <td>$rowtable[discount]</td>
                    <td>$rowtable[valid_date]</td>
                    <td>$rowtable[unvalid_date]</td>
                </tr>
                ";
    }
};
echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <div class='tab-pane fade' id='stok' role='tabpanel' aria-labelledby='stok-tab'>
            <div class='container-fluid'>
                <div class='row'>
                <section class='col-lg-5 connectedSortable'>
                        <div class='card'>
                            <div class='card-header'>
                                <b>Input Stok</b>
                            </div>
                            <div class='card-body'>
                                <div class='tab-content p-0'>
                                    <form action='php/user/inputstok_kasir.php' method='POST'>
                                        <div class='mb-3 row'>
                                            <label for='inputPassword' class='col-sm-3 col-form-label'>Nama Produk</label>
                                            <div class='col-sm-9'>
                                                <select class='form-select' aria-label='Default select example' name='namaprodukstok'>
                                                    <option selected disabled>Pilih Produk...</option>";
$sqlproduk = "SELECT * FROM table_produk";
$resultproduk = $conn->query($sqlproduk);
if ($resultproduk->num_rows > 0) {
    // output data of each row
    while ($rowproduk = $resultproduk->fetch_assoc()) {
        echo "
            <option value='$rowproduk[nama_produk]'>$rowproduk[nama_produk]</option>
            ";
    }
}

echo "</select>
                                            </div>
                                        </div>
                                        <div class='mb-3 row'>
                                            <label for='inputPassword' class='col-sm-3 col-form-label'>Jumlah Stok</label>
                                            <div class='col-sm-9'>
                                                <input type='text' class='form-control' id='inputPassword' name='jumlahstok'>
                                            </div>
                                        </div>
                                        <div class='mb-3 row'>
                                            <button type='submit' class='btn btn-primary'>Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                    </section>
                    <section class='col-lg-7 connectedSortable'>
                        <div class='card'>
                            <div class='card-header'>
                                <b>Table Stok</b>
                            </div>
                            <div class='card-body'>
                                <div class='tab-content p-0'>
                                    <table class='table table-striped projects'>
                                        <thead>
                                            <tr>
                                                <td>ID</td>
                                                <td>Nama Produk</td>
                                                <td>Jumlah Stok</td>
                                                <td>Tanggal Input</td>
                                            </tr>
                                        </thead>
                                        <tbody>";
$sqldatastok = "SELECT * FROM table_stockist";
$resultdatastok = $conn->query($sqldatastok);

if ($resultdatastok->num_rows > 0) {
    // output data of each row
    while ($rowdata = $resultdatastok->fetch_assoc()) {
        echo "
                <tr>
                    <td>$rowdata[id_data]</td>
                    <td>$rowdata[nama_produk]</td>
                    <td>$rowdata[jumlah_stok]</td>
                    <td>$rowdata[tanggal_input]</td>
                </tr>
                ";
    }
};
echo "
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>";
