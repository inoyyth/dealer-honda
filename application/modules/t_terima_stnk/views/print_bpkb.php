<style>
    body {
        font-family: "Calibri";
        letter-spacing: 4px;
        font-size: 12px;
    }
    @media print {
        .no-print, .no-print * { display: none !important; }
        font-family: "Calibri";
        letter-spacing: 4px;
        font-size: 12px;
        size: 5.5in 8.5in;
    }
</style>
<body>
    <div style="font-weight:bold;">PT. Mandala Kekar Abadi</div>
    <div>Dealer Resmi Sepeda Motor Honda</div>
    <div>Jl. Raya Bekasi Timur No. 158 Cipinang Jakarta Timur</div>
    <div>Telp.(021)8198484,8517484,8517620 Fax.(021)8514855</div>
    <br>
    <div style="text-align: center;font-weight: bolder;">
        == BUKTI SERAH TERIMA BPKB DAN FAKTUR ==
    </div>
    <br>
    <table style="width: 100%;" style="font-size:12px;" cellspacing="0" cellpadding="1">
        <tr>
            <td style="font-size:12px;width: 13%;border-top:2px solid;border-left:2px solid;">Tanggal Diserahkan : </td>
            <td style="font-size:12px;width: 20%;border-top:2px solid;"> <?php echo $detail['t_terima_tgl_bpkb']; ?></td>
            <td style="font-size:12px;width: 10%;border-top:2px solid;border-left:2px solid;">Jenis/Merk : </td>
            <td style="font-size:12px;width: 25%;border-top:2px solid;border-right:2px solid;"> <?php echo $master_motor[0]['tipe_motor']." / ".$master_motor[0]['merk']; ?></td>
        </tr>
        <tr>
            <td style="font-size:12px;border-left:2px solid;">Diserahkan Kepada : </td>
            <td style="font-size:12px;"> <?php echo $customer[0]['nama_customer']; ?></td>
            <td style="font-size:12px;border-left:2px solid;">No.Polisi : </td>
            <td style="font-size:12px;border-right:2px solid;"> <?php echo $detail['t_terima_no_polisi']; ?></td>
        </tr>
        <tr>
            <td style="font-size:12px;border-left:2px solid;">No.KTP Penerima : </td>
            <td style="font-size:12px;"> <?php echo $customer[0]['no_ktp']; ?></td>
            <td style="font-size:12px;border-left:2px solid;">Tahun Pembuatan : </td>
            <td style="font-size:12px;border-right:2px solid;"> <?php echo $terima_motor[0]['tahun']; ?></td>
        </tr>
        <tr>
            <td style="font-size:12px;border-left:2px solid;">No.BPKB : </td>
            <td style="font-size:12px;"> <?php echo $detail['t_terima_no_bpkb']; ?></td>
            <td style="font-size:12px;border-left:2px solid;">No.Rangka : </td>
            <td style="font-size:12px;border-right:2px solid;"> <?php echo $terima_motor[0]['norangka']; ?></td>
        </tr>
        <tr>
            <td style="font-size:12px;border-left:2px solid;">Nama di BPKB : </td>
            <td style="font-size:12px;"> <?php echo $stnk_bpkb_customer['t_stnk_nama']; ?></td>
            <td style="font-size:12px;border-left:2px solid;">No.Mesin : </td>
            <td style="font-size:12px;border-right:2px solid;"> <?php echo $terima_motor[0]['nomesin']; ?></td>
        </tr>
        <tr>
            <td style="font-size:12px;border-bottom:2px solid;border-left:2px solid;">No.Faktur : </td>
            <td style="font-size:12px;border-bottom:2px solid;"> <?php echo $customer[0]['no_ktp']; ?></td>
            <td style="font-size:12px;border-bottom:2px solid;border-left:2px solid;">Keterangan : </td>
            <td style="font-size:12px;border-bottom:2px solid;border-right:2px solid;"> <?php echo $detail['t_terima_add_biaya_1_description']; ?></td>
        </tr>
    </table>
    <br>
    <div style="text-align: right;padding-right: 30px;">
        Jakarta, <?php echo tanggalan(date('Y-m-d')); ?>
    </div>
    <br/>
    <center>
        <table style="font-size: 15px;" cellpadding="1">
            <tr>
                <td style="font-size:12px;width: 30%;text-align: center;">Diterima Oleh,</td>
                <td style="font-size:12px;width: 30%;text-align: center;">Diserahkan Oleh,</td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td style="width: 30%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                <td style="width: 30%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            </tr>
        </table>
        <br>
        <div style="text-align: left;">
            Catatan: <br>
            * Jika Pengambilan BPKB bukan pemilik, maka harus dengan surat kuasa.<br>
            * Lampirkan foto copy KTP pengambilan dan pemilik.
            <br>
            <div style="text-align: right;">
                <b>BSTP No. <?php echo str_pad($detail['id'], 5, '0', STR_PAD_LEFT);?></b>
            </div>
        </div>
        <br>
        <div style="text-align: center;">
            <button class="no-print" onclick="printPage();">Print</button>
        </div>
    </center>
</body>
<script>
    function printPage() {
        window.print();
    }
</script>