
<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Laporan Penjualan</div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="panel default red_border vertical_border h1">
                            <div class="block-web">
                                <div class="header">
                                    <h3>Filter Laporan</h3>
                                </div>
                                <form>
                                    <div class="porlets-content" style="display: block;">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Jangka Waktu</label>
                                                    <div class="input-daterange input-group input-group-xs" id="datepicker">
                                                        <input type="text" class="input-xs form-control" name="start" />
                                                        <span class="input-group-addon">to</span>
                                                        <input type="text" class="input-xs form-control" name="end" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Proses Transaksi</label>
                                                    <select name="proses_transaksi" id="proses_transaksi" class="form-control">
                                                        <option value=""></option>
                                                        <option value="1">On Progress</option>
                                                        <option value="4">Void</option>
                                                        <option value="5">Complete</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Tipe Motor</label>
                                                    <input type="text" style="height: 35px;" class="form-control" name="tipe_motor" id="tipe_motor">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tipe Transaksi</label>
                                                    <input type="text" style="height: 33px;" class="form-control" name="tipe_transaksi" id="tipe_transaksi">
                                                </div>
                                                <div>
                                                    <input type="submit" class="btn btn-sm btn-primary" id="submit-btn" value="Search">
                                                    <input type="reset" class="btn btn-sm btn-warning" id="reset-btn" value="Reset">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>