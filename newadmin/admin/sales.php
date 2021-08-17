<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Penjualan</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <table id="tabelsales" class="display">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Detail Transaksi</th>
                        <th>Sub Total</th>
                        <th>Pajak</th>
                        <th>Total</th>
                        <th>Bayar</th>
                        <th>Kembalian</th>
                        <th>Tanggal Transaksi</th>
                        <th>Kasir</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="lihatDataSales" tabindex="-1" aria-labelledby="lihatDataSalesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lihatDataSalesLabel">Detail Transaksi</h5>
            </div>
            <div class="modal-body p-2">
                <table id="tabelsalesshow" class="display">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnmodalseedatahide">Close</button>
            </div>
        </div>
    </div>
</div>