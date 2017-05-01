<div class="row">
    <div class="col-lg-6">
        <section class="panel default red_border vertical_border h1">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a> <a href="#" class="refresh"><i class="fa fa-repeat"></i></a> <a href="#" class="close-down"><i class="fa fa-times"></i></a> </div>
                    <h3>Detail Motor</h3>
                </div>
                <div class="porlets-content" style="display: block;">
                    <div class="row">
                        <div class="col-lg-6">
                            <table cellspacing="5" cellpadding="3">
                                <tr>
                                    <td>Gudang </td>
                                    <td>: <?php echo $detail_penerimaan_motor['gudang']; ?></td>
                                </tr>
                                <tr>
                                    <td>No. Mesin </td>
                                    <td>: <?php echo $detail_penerimaan_motor['nomesin']; ?></td>
                                </tr>
                                <tr>
                                    <td>No. Rangka </td>
                                    <td>: <?php echo $detail_penerimaan_motor['norangka']; ?></td>
                                </tr>
                                <tr>
                                    <td>Warna </td>
                                    <td>: <?php echo $detail_penerimaan_motor['warna']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun </td>
                                    <td>: <?php echo $detail_penerimaan_motor['tahun']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table cellspacing="0" cellpadding="3">
                                <tr>
                                    <td>Type Motor </td>
                                    <td>: <?php echo $detail_motor['tipe_motor']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Motor </td>
                                    <td>: <?php echo $detail_motor['nama_motor']; ?></td>
                                </tr>
                                <tr>
                                    <td>Varian </td>
                                    <td>: <?php echo $detail_motor['varian']; ?></td>
                                </tr>
                                <tr>
                                    <td>Merk Motor </td>
                                    <td>: <?php echo $detail_motor['merk']; ?></td>
                                </tr>
                                <tr>
                                    <td>Harga OTR </td>
                                    <td>: <?php echo formatrp($detail_motor['harga_otr']); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="loading" style="display: none;"><i class="fa fa-refresh fa-spin"></i></div></div>
        </section>
    </div>
    <div class="col-lg-6">
        <section class="panel default red_border vertical_border h1">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a> <a href="#" class="refresh"><i class="fa fa-repeat"></i></a> <a href="#" class="close-down"><i class="fa fa-times"></i></a> </div>
                    <h3>Detail Customer</h3>
                </div>
                <div class="porlets-content" style="display: block;">
                    <div class="row">
                        <div class="col-lg-6">
                            <table cellspacing="5" cellpadding="3">
                                <tr>
                                    <td>KTP </td>
                                    <td>: <?php echo $detail_customer['no_ktp']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama </td>
                                    <td>: <?php echo $detail_customer['nama_customer']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tmp.Lahir </td>
                                    <td>: <?php echo $detail_customer['tempat_lahir_customer']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tgl.Lahir </td>
                                    <td>: <?php echo $detail_customer['tanggal_lahir_customer']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table cellspacing="0" cellpadding="3">
                                <tr>
                                    <td>Kelamin </td>
                                    <td>: <?php echo ($detail_customer['kelamin_customer'] == "P" ? "Pria" : "Wanita"); ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat </td>
                                    <td>: <?php echo $detail_customer['alamat_customer']; ?></td>
                                </tr>
                                <tr>
                                    <td>Telepon </td>
                                    <td>: <?php echo $detail_customer['telepon_customer']; ?></td>
                                </tr>
                                <tr>
                                    <td>Handphone </td>
                                    <td>: <?php echo $detail_customer['handphone_customer']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="loading" style="display: none;"><i class="fa fa-refresh fa-spin"></i></div></div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-5">
        <section class="panel default red_border vertical_border h1">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a> <a href="#" class="refresh"><i class="fa fa-repeat"></i></a> <a href="#" class="close-down"><i class="fa fa-times"></i></a> </div>
                    <h3>Pembayaran</h3>
                </div>
                <div class="porlets-content" style="display: block;">
                    <div class="row">
                        <table cellspacing="5" cellpadding="3">
                            <tr>
                                <td>No.SO </td>
                                <td>: <b><?php echo $detail_harga['noso']; ?></b></td>
                            </tr>
                            <tr>
                                <td>Cara Pembelian </td>
                                <td>: <?php echo $detail_harga['cara_pembelian']; ?></td>
                            </tr>
                            <?php if ($detail_harga['cara_pembelian'] == "Kredit") { ?>
                                <tr>
                                    <td>Leasing </td>
                                    <td>: <?php echo $detail_leasing['leasing']; ?></td>
                                </tr>
                                <tr>
                                    <td>DP System </td>
                                    <td>: <?php echo formatrp($detail_harga['dp_system']); ?></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td>Diskon </td>
                                <td>: <?php echo formatrp($detail_harga['diskon']); ?></td>
                            </tr>
                            <tr>
                                <td>Fee </td>
                                <td>: <?php echo formatrp($detail_harga['fee']); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-7">
        <section class="panel default red_border vertical_border h1">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a> <a href="#" class="refresh"><i class="fa fa-repeat"></i></a> <a href="#" class="close-down"><i class="fa fa-times"></i></a> </div>
                    <h3>Data STNK/BPKB</h3>
                </div>
                <div class="porlets-content" style="display: block;">
                    <div class="row">
                        <div class="col-lg-6">
                            <table cellspacing="5" cellpadding="3">
                                <tr>
                                    <td>No.Process</td>
                                    <td>: <b><?php echo $stnk_bpkb['no_process']; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Tgl.Process STNK </td>
                                    <td>: <?php echo tanggalan($stnk_bpkb['stnk_process_date']); ?></td>
                                </tr>
                                <tr>
                                    <td>Tgl.Selesai STNK </td>
                                    <td>: <?php echo tanggalan($stnk_bpkb['stnk_estimate_date']); ?></td>
                                </tr>
                                <tr>
                                    <td>Tgl.Process BPKB </td>
                                    <td>: <?php echo tanggalan($stnk_bpkb['bpkb_process_date']); ?></td>
                                </tr>
                                <tr>
                                    <td>Tgl.Selesai BPKB </td>
                                    <td>: <?php echo tanggalan($stnk_bpkb['bpkb_estimate_date']); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table cellspacing="5" cellpadding="3">
                                <tr>
                                    <td>Nama Di STNK</td>
                                    <td>: <?php echo $stnk_bpkb_customer['t_stnk_nama']; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat Di STNK </td>
                                    <td>: <?php echo $stnk_bpkb_customer['t_stnk_alamat']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Void Confirm</h4>
            </div>
            <div class="modal-body">
                <div>
                    <p>Berikan Alasan Anda Void Transaksi Ini !</p>
                    <textarea id="alasan" style="min-width: 240px;max-width: 240px;"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="VoidTransaction">VOID !!!</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="block-web">
            <div class="header" style="padding-bottom: 15px;">
                <h3 class="content-header"> </h3>
            </div>
            <div class="porlets-content">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Print Form Type</label>
                        <input type="hidden" id="nosoCovernote" name="nosoCovernote" value="<?php echo encode_url($detail_harga['noso']); ?>">
                        <select name="form-type" id="form-type" class="form-control">
                            <option value="1">Type 1</option>
                            <option value="2">Type 2</option>
                            <option value="3">Type 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button id="printCovernote" class="btn btn-sm btn-default">Print</button> 
                        <a href="<?php echo base_url('surant-pernyataan'); ?>" class="btn btn-sm btn-warning">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="modalCovernote" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div id="covernoteContent"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#printCovernote").click(function (event) {
            event.preventDefault();
            var baseUrl = '<?php echo base_url('leasing_covernote/print_covernotex'); ?>';
            $("#covernoteContent").load(baseUrl + "/" + parseInt($("#form-type").val()) + "/" + $("#nosoCovernote").val()); 
            $('#modalCovernote').modal('show');
        });
    });
</script>
