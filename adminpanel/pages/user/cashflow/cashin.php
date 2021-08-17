<section class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-5 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <b>Input Cash in atau Cash out</b>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <form id="formcashincashout" method="POST">
                                <div class="mb-3 row">
                                    <label for="inputnilaicash" class="col-sm-3 col-form-label">Nilai Uang</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputnilaicash">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="deskripsiuang" class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" placeholder="Deskripsi" id="deskripsiuang" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3" align="center">
                                    <button class="btn btn-primary" type="submit" onclick="CashInFunction();"><i class="fas fa-money-bill-wave"></i> Cash-In</button>
                                    <button class="btn btn-success" type="submit" onclick="CashOutFunction();"><i class="fas fa-money-bill-wave"></i> Cash-Out</button>
                                    <button class="btn btn-danger" type="reset" onclick="CancelFunction();"><i class="fas fa-moneyban"></i> Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </section>
            <section class="col-lg-7 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <b>Table Cash-in dan Cash-out</b>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <table class="table table-light" id="datatablecash">
                                <thead>
                                    <tr>
                                        <td>ID Transaksi</td>
                                        <td>Tipe Transaksi</td>
                                        <td>Harga</td>
                                        <td>Deskripsi</td>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>ID Transaksi</td>
                                        <td>Tipe Transaksi</td>
                                        <td>Harga</td>
                                        <td>Deskripsi</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </section>
        </div>
    </div>
</section>