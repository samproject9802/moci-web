<?php
session_start();

if (!isset($_SESSION['status']) && $_SESSION['level'] == 'Kasir') {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/body-admin.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>Admin || Moci Website</title>
</head>

<body>

    <div class="container-fluid m-0 p-0">
        <div class="card">
            <div class="card-header p-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">MociAdmin</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-transaksi-tab" data-bs-toggle="pill" data-bs-target="#pills-transaksi" type="button" role="tab" aria-controls="pills-transaksi" aria-selected="true">Data Transaksi</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-stok-tab" data-bs-toggle="pill" data-bs-target="#pills-stok" type="button" role="tab" aria-controls="pills-stok" aria-selected="false">Data Stok</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" type="button" href="php/logout.php" aria-selected="false">Logout</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
            <div class="card-body p-0">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-transaksi" role="tabpanel" aria-labelledby="pills-transaksi-tab">
                        <?php include_once 'pages/admin/datatransaksi.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="pills-stok" role="tabpanel" aria-labelledby="pills-stok-tab">
                        <?php include_once 'pages/admin/datastok.php'; ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                2 days ago
            </div>
        </div>
    </div>

    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#displaydatastokkasir').DataTable();
        });
        $(document).ready(function() {
            $('#displaydatastokadmin').DataTable();
        });
    </script>
    <script src="dist/js/showdatatransaction.js"></script>
    <script src="dist/js/stockist.js"></script>
</body>

</html>