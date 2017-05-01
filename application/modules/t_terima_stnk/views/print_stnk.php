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
        == TANDA TERIMA "PT MANDALA KEKAR ABADI" ==
    </div>
    <br>
    <table style="width: 100%;" style="font-size:12px;" cellspacing="0" cellpadding="1">
        <tr>
            <td style="font-size:12px;width: 7%;border-top:2px solid;border-left:2px solid;">Tanggal : </td>
            <td style="font-size:12px;width: 25%;border-top:2px solid;"> ......................</td>
            <td style="font-size:12px;width: 7%;border-top:2px solid;border-left:2px solid;">Nama : </td>
            <td style="font-size:12px;width: 25%;border-top:2px solid;border-right:2px solid;"> <?php echo $customer[0]['nama_customer']; ?></td>
        </tr>
        <tr>
            <td style="font-size:12px;border-left:2px solid;">Alamat : </td>
            <td style="font-size:12px;"> <?php echo $customer[0]['alamat_customer']; ?></td>
            <td style="font-size:12px;border-left:2px solid;">Type : </td>
            <td style="font-size:12px;border-right:2px solid;"> <?php echo $terima_motor[0]['tipe']; ?></td>
        </tr>
        <tr>
            <td style="font-size:12px;border-left:2px solid;">No.Polisi : </td>
            <td style="font-size:12px;"> <?php echo $detail['t_terima_no_polisi']; ?></td>
            <td style="font-size:12px;border-left:2px solid;">No.Rangka : </td>
            <td style="font-size:12px;border-right:2px solid;"> <?php echo $terima_motor[0]['norangka']; ?></td>
        </tr>
        <tr>
            <td style="font-size:12px;border-bottom:2px solid;border-left:2px solid;">No.Mesin : </td>
            <td style="font-size:12px;border-bottom:2px solid;"> <?php echo $terima_motor[0]['nomesin']; ?></td>
            <td style="font-size:12px;border-bottom:2px solid;border-left:2px solid;">No.SO : </td>
            <td style="font-size:12px;border-bottom:2px solid;border-right:2px solid;"> <?php echo $penjualan[0]['noso']; ?></td>
        </tr>
    </table>
    <br>
    <div style="text-align: right;padding-right: 30px;">
        Jakarta, <?php echo tanggalan(date('Y-m-d')); ?>
    </div>
    <br/>
<center>
    <table style="font-size: 15px;" cellpadding="1" cellspacing="1">
        <tr>
            <td style="font-size:12px;width: 30%;text-align: center;border-top: 2px solid;border-left: 2px solid;">STNK + PLAT NO.</td>
            <td style="font-size:12px;width: 30%;text-align: center;border-top: 2px solid;">BUKU SERVICE</td>
            <td style="font-size:12px;width: 30%;text-align: center;border-top: 2px solid;border-right: 2px solid;">VIP CARD</td>
        </tr>
        <tr>
            <td style="height: 50px;border-top: 2px solid;border-left: 2px solid;"></td>
            <td style="border-top: 2px solid;border-left: 2px solid;border-right: 2px solid;"></td>
            <td style="border-top: 2px solid;border-right: 2px solid;"></td>
        <tr>
            <td style="width: 30%;text-align: center;border-left: 2px solid;border-top: 2px solid;border-bottom: 2px solid;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            <td style="width: 30%;text-align: center;border-left: 2px solid;border-right: 2px solid;border-top: 2px solid;border-bottom: 2px solid;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            <td style="width: 30%;text-align: center;border-right: 2px solid;border-top: 2px solid;border-bottom: 2px solid;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
        </tr>
    </table>
    <br>
    <div style="text-align: right;">
        <b>BTDT No. <?php echo str_pad($detail['id'], 5, '0', STR_PAD_LEFT); ?></b>
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