<div class="col-md-12">
    <div class="block-web">
        <div class="form-group">
            <a href="<?php echo base_url('penjualan');;?>" class="btn btn-danger">Back</a> 
            <button class="btn btn-default" onclick="return window.open('<?php echo base_url('penjualan-detail-print-'.encode_url($detail_penjualan['noso']));?>', '_blank');"><i class="fa fa-print"></i> Print</button>
        </div>
    </div>
</div>
<div class="col-lg-12">
     <div class="col-lg-12">
        <section class="panel default red_border vertical_border h1">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a> <a href="#" class="refresh"><i class="fa fa-repeat"></i></a> <a href="#" class="close-down"><i class="fa fa-times"></i></a> </div>
                    <h3>Detail Transaksi</h3>
                </div>
                <div class="porlets-content" style="display: block;">
                    <div class="row">
                        <div class="col-lg-6">
                            <table cellspacing="5" cellpadding="3">
                                <tr>
                                    <td>No.SO </td>
                                    <td>: <?php echo $detail_penjualan['noso']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal </td>
                                    <td>: <?php echo $detail_penjualan['tanggal'];?></td>
                                </tr>
                                <tr>
                                    <td>No.Mesin </td>
                                    <td>: <?php echo $detail_penerimaan_motor['nomesin'];?></td>
                                </tr>
                                <tr>
                                    <td>No.Rangka </td>
                                    <td>: <?php echo $detail_penerimaan_motor['norangka'];?></td>
                                </tr>
                                <tr>
                                    <td>Nama Motor </td>
                                    <td>: <?php echo $detail_motor['nama_motor'];?></td>
                                </tr>
                                <tr>
                                    <td>Warna </td>
                                    <td>: <?php echo $detail_penerimaan_motor['warna'];?></td>
                                </tr>
                                <tr>
                                    <td>Tahun </td>
                                    <td>: <?php echo $detail_penerimaan_motor['tahun'];?></td>
                                </tr>
                                <tr>
                                    <td>Harga OTR </td>
                                    <td>: <?php echo formatrp($detail_motor['harga_otr']);?></td>
                                </tr>
                                <tr>
                                    <td>Cara Beli </td>
                                    <td>: <?php echo $detail_harga['cara_pembelian'];?></td>
                                </tr>
                                <tr>
                                    <td>Marketing </td>
                                    <td>: <?php echo $detail_harga['marketing'];?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table cellspacing="0" cellpadding="3">
                                <?php if($detail_harga['cara_pembelian']=="Kredit"){ ?>
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
                                    <td>Tagih </td>
                                    <td>: <?php echo formatrp($detail_harga['tagih']); ?></td>
                                </tr>
                                <tr>
                                    <td>DP/Uang Muka </td>
                                    <td>: <?php echo formatrp($detail_harga['dp']); ?></td>
                                </tr>
                                <tr>
                                    <td>Sisa Hutang </td>
                                    <td>: <?php echo formatrp($detail_harga['sisa_hutang']); ?></td>
                                </tr>
                                <tr>
                                    <td>Fee </td>
                                    <td>: <?php echo formatrp($detail_harga['fee']); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="loading" style="display: none;"><i class="fa fa-refresh fa-spin"></i></div></div>
        </section>
    </div>
</div>
<div class="col-lg-12">
     <div class="col-lg-12">
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
                                    <td>No.KTP </td>
                                    <td>: <?php echo $detail_customer['no_ktp'];?></td>
                                </tr>
                                <tr>
                                    <td>Nama </td>
                                    <td>: <?php echo $detail_customer['nama_customer'];?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir </td>
                                    <td>: <?php echo $detail_customer['tempat_lahir_customer'];?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir </td>
                                    <td>: <?php echo $detail_customer['tanggal_lahir_customer'];?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin </td>
                                    <td>: <?php echo ($detail_customer['tanggal_lahir_customer']=="P"?"Pria":"Wanita");?></td>
                                </tr>
                                <tr>
                                    <td>Alamat </td>
                                    <td>: <?php echo $detail_customer['alamat_customer'];?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table cellspacing="0" cellpadding="3">
                                <tr>
                                    <td>RT / RW </td>
                                    <td>: <?php echo $detail_customer['rt'];?> / <?php echo $detail_customer['rw'];?></td>
                                </tr>
                                <tr>
                                    <td>Wilayah </td>
                                    <td>: <?php echo $detail_customer['wilayah'];?></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan </td>
                                    <td>: <?php echo $detail_customer['kelurahan'];?></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan </td>
                                    <td>: <?php echo $detail_customer['kecamatan'];?></td>
                                </tr>
                                <tr>
                                    <td>Telepon </td>
                                    <td>: <?php echo $detail_customer['telepon_customer'];?></td>
                                </tr>
                                <tr>
                                    <td>Handphone </td>
                                    <td>: <?php echo $detail_customer['handphone_customer'];?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="loading" style="display: none;"><i class="fa fa-refresh fa-spin"></i></div></div>
        </section>
    </div>
</div>