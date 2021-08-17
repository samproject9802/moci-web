<div class="container-fluid p-3">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Detail Transaksi</th>
                <th>Subtotal</th>
                <th>Pajak</th>
                <th>Total</th>
                <th>Bayar</th>
                <th>Kembalian</th>
                <th>Tanggal dan Jam Transaksi</th>
            </tr>
        </thead>
        <tbody id="transactiondetail">
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="displaydatatrans" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Discount</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>