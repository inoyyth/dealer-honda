<div class="col-md-12">
    <div class="block-web">
        <div class="form-group">
            <a href="<?php echo base_url('laporan-penjualan');?>" class="btn btn-danger">Back</a> 
            
        </div>
    </div>
</div>
<div class="col-lg-12">
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
                    <h3>Detail PDI</h3>
                </div>
                <div class="porlets-content" style="display: block;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                Kode PDI : <b><?php echo $detail_pdi['kdpdi']; ?></b><br>
                                Tgl PDI : <b><?php echo $detail_pdi['tgl_pdi']; ?></b><br><br>
                            </div>
                            <table cellspacing="0" cellpadding="3">
                                <?php
                                $i = 0;
                                echo"<tr><td style='width: auto;'>Buku Panduan </td><td style='padding-right:20px;'> : YA</td>";
                                echo"<td style='width: auto;'>Kertas Gesek Polda </td><td style='padding-right:20px;'> : YA</td></tr>";
                                foreach ($list_aksesoris as $kListAksesoris => $vListAksesoris) {
                                    if (($i % 2) == 0)
                                        echo "\t<tr>\r\n";
                                    echo "\t\t<td style='width: auto;'>" . ucwords($vListAksesoris['katagori_aksesoris']) . " </td><td style='padding-right:20px;'> : " . $vListAksesoris['aksesoris'] . "</td>\r\n";
                                    if (($i % 2) == 1)
                                        echo "\t</tr>\r\n";
                                    $i++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="loading" style="display: none;"><i class="fa fa-refresh fa-spin"></i></div></div>
        </section>
    </div>
</div>
<div class="col-lg-12">
    <div class="col-lg-6">
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
                            <tr style="font-weight: bolder;">
                                <td>Status Transaksi</td>
                                <td>: <?php echo status_transaksi($detail_penjualan['m_status']);?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-6">
        <section class="panel default red_border vertical_border h1">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a> <a href="#" class="refresh"><i class="fa fa-repeat"></i></a> <a href="#" class="close-down"><i class="fa fa-times"></i></a> </div>
                    <h3>List DP</h3>
                </div>
                <div class="porlets-content" style="display: block;">
                    <div class="row">
                        <table cellpadding="0" cellspacing="3" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 30%;text-align: center;">DP KE</th>
                                    <th style="width: 30%;text-align: center;">Nominal</th>
                                    <th style="width: 30%;text-align: center;">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list_dp as $kListDP => $vListDP) {
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $vListDP['transaksi']; ?></td>
                                        <td style="text-align: right;"><?php echo formatrp($vListDP['nominal']); ?></td>
                                        <td style="text-align: center;"><?php echo $vListDP['tgl_dp']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
<script>
    $(document).ready(function () {
        $('#VoidTransaction').click(function () {
            var noso = '<?php echo $detail_harga['noso'];?>';
            var alasan = $("#alasan").val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('t_void/void_transaction'); ?>",
                data: {noso: noso,alasan:alasan},
                success: function (result) {
                    location.replace('<?php echo base_url('void');?>');
                },
                async: false
            });
        });
    });
</script>
