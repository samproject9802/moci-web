<section class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-7 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <b>List Produk</b>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="row row-cols-1 row-cols-md-2 g-4" id="listproduct">

                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>

            </section>
            <section class="col-lg-5 connectedSortable">
                <div class="card">
                    <!-- <div class="card-body">
                        <div class="tab-content p-0"> -->
                    <table class="table" id="salestable">
                        <thead class="thead-dark" id="indikatortable">
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Disc.</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="tablepenjualan">
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                    <!-- </div>
                    </div>/.card-body -->
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <form>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Subtotal</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="totalValue" value="Rp.0.00">
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Pajak</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="taxvalue" value="10 %">
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">TOTAL</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="totalValue1" value="Rp.0.00">
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label for="">Bayar (Rp.)</label>
                                                <input type="text" class="form-control-plaintext" id="cashprocess" onkeyup="kembalian();" data-a-sign="Rp " data-a-dec="," data-a-sep="." value="0">
                                            </td>
                                            <td>
                                                <label for="">Kembalian</label>
                                                <input type="text" readonly class="form-control-plaintext" id="kembaliansaya" value="Rp 0.00" onclick="window.location.reload(false);">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <a class="btn btn-success" onclick="prosesdata();"><i class="fas fa-spinner"></i> Proses</a>
                                    <button class="btn btn-danger"><i class="fas fa-spinner"></i> Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </section>
        </div>
    </div>
</section>