<?php
$kwt_explode = explode("/", $detail_harga['noso']);
?>
<style>
    body {
        font-family: "Times New Roman", Times, serif;
        letter-spacing: 2px;
        font-size: 12px;
        font-family: Sans-Serif;
    }
    @media print {
        .no-print, .no-print * { display: none !important; }
        font-family: Sans-Serif;
        letter-spacing: 2px;
        font-size: 12px;
    }
</style>
<body>
    <div style="font-weight:bold;">PT. Mandala Kekar Abadi</div>
    <div>Dealer Resmi Sepeda Motor Honda</div>
    <div>Jl. Raya Bekasi Timur No. 158 Cipinang Jakarta Timur</div>
    <div>Telp.(021)6198464,8517484,8517620 Fax.:(021)8514855</div>
    <br>
    <table style="width: 100%;">
        <tr>
            <td style="border-top:2px solid;border-left:2px solid;border-bottom:2px solid;">
                <table style="font-size:13px;width:450px;" cellspacing="0" cellpadding="1">
                    <tr>
                        <td>Nama Pembeli: <?php echo $detail_customer['nama_customer'];?></td>
                    </tr>
                    <tr>
                        <td>Alamat: <?php echo $detail_customer['alamat_customer'];?></td>
                    </tr>
                    <tr>
                        <td>No.Tlp: <?php echo $detail_customer['telepon_customer'];?></td>
                    </tr>
                    <tr>
                        <td>Nama STNK: <?php echo $detail_stnk['t_stnk_nama'];?></td>
                    </tr>
                    <tr>
                        <td>Almt.STNK: <?php echo $detail_stnk['t_stnk_alamat'];?></td>
                    </tr>
                </table>
            </td>
            <td style="border-bottom:2px solid;border-right:2px solid;border-top:2px solid;">
                <table style="font-size:13px;" cellspacing="0" cellpadding="1">
                    <tr>
                        <td>No.Surat Jalan: <?php echo $detail_pdi['nosj'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal: <?php echo date('d/m/Y');?></td>
                    </tr>
                    <tr>
                        <td>No.Konsumen/SO: <?php echo $detail_pdi['noso'];?></td>
                    </tr>
                    <tr>
                        <td>Harga OTR: <?php echo formatrp($detail_motor['harga_otr']);?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <table style="width: 100%;" cellspacing="0" cellpadding="3">
        <tr style="text-align:center;font-size:13px;">
            <td style="border-top:2px solid;border-left:2px solid;height: 30px;">No.</td>
            <td style="border-top:2px solid;border-left:2px solid;">Tipe Motor</td>
            <td style="border-top:2px solid;border-left:2px solid;">Warna</td>
            <td style="border-top:2px solid;border-left:2px solid;">Tahun</td>
            <td style="border-top:2px solid;border-left:2px solid;">No.Rangka</td>
            <td style="border-top:2px solid;border-right:2px solid;border-left:2px solid;">No.Mesin</td>
        </tr>
        <tr style="text-align:center;font-size:13px;">
            <td style="border-top:2px solid;border-left:2px solid;border-bottom:2px solid;">1.</td>
            <td style="border-top:2px solid;border-left:2px solid;border-bottom:2px solid;"><?php echo $detail_penerimaan_motor['tipe'];?></td>
            <td style="border-top:2px solid;border-left:2px solid;border-bottom:2px solid;"><?php echo $detail_penerimaan_motor['warna'];?></td>
            <td style="border-top:2px solid;border-left:2px solid;border-bottom:2px solid;"><?php echo $detail_penerimaan_motor['tahun'];?></td>
            <td style="border-top:2px solid;border-left:2px solid;border-bottom:2px solid;"><?php echo $detail_penerimaan_motor['norangka'];?></td>
            <td style="border-top:2px solid;border-left:2px solid;border-bottom:2px solid;border-right:2px solid;"><?php echo $detail_penerimaan_motor['nomesin'];?></td>
        </tr>
    </table>
    <div style="margin-top:5px;">
        Harap Diterima Sepeda Motor Tsb diatas ini, dalam keadaan 100% tanpa cacat : <br>
        Perlengkapan : 
    </div>
    <div style="margin-top:10px;">
        <table style="font-size:13px;" cellspacing="0" cellpadding="2">
            <?php 
            $i = 0;
            foreach($list_aksesoris as $kList=>$vList){
            if (($i % 4) == 0) echo "\t<tr>\r\n";
            echo "\t\t<td> [X] " . ucwords(str_replace("_"," ",$vList)) . "</td>\r\n";
            if (($i % 4) == 3) echo "\t</tr>\r\n";
            $i++;
            }
            ?>
        </table>
    </div>
    <?php if($detail_harga['cara_pembelian']=="Kredit"){?>
        <div style="border:2px solid;margin-top:10px;">
            Syarat Pembayaran CREDIT <?php echo $detail_leasing['leasing'];?>
        </div>
    <?php } ?>
    <br/>
    <center>
        <table style="font-size: 12px;" cellpadding="1">
            <tr>
                <td style="font-size:12px;width: 20%;text-align: center;">Penjualan,</td>
                <td style="font-size:12px;width: 20%;text-align: center;">Pengirim,</td>
                <td style="font-size:12px;width: 20%;text-align: center;">Pimpinan,</td>
                <td style="font-size:12px;width: 20%;text-align: center;">Penerima,</td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td style="width: 20%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                <td style="width: 20%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                <td style="width: 20%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                <td style="width: 20%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            </tr>
        </table>
    </center>
    <div style="margin-top:10px;">
        Khusus pembelian CASH, BPKB yang tidak diambil dalam waktu satu tahun dari tanggal STNK jadi, menjadi diluar tanggung jawab pihak dealer.
    </div>
    <div style="text-align: center;">
        <button class="no-print" onclick="printPage();">Print</button>
    </div>
</body>
<script src="<?php echo base_url();?>themes/js/jquery-2.1.0.js"></script>
<script>
    function printPage() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_surat_jalan/update_status_print'); ?>",
            data: {noso: '<?php echo $detail_harga['noso'];?>'},
            success: function (result) {
                window.print();
            }
        });
    }
</script>