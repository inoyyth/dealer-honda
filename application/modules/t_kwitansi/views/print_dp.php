<?php
if($dp['transaksi'] == 4 ){
    $descDp = "PELUNASAN";
    $total_kwitansi = ($dp['nominal'] + $detail_harga['diskon']);
}else{
    $descDp = "DP KE ".$dp['transaksi'];
    $total_kwitansi = $dp['nominal'];
}
?>
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
    <div>Telp.(021)6198464,8517484,8517620 Fax.:(021)8514855</div>
    <br>
    <div style="text-align: center;font-weight: bolder;">
        == KWITANSI ==
    </div>
    <br>
    <table style="width: 100%;" style="font-size:15px;" cellspacing="0" cellpadding="3">
        <tr>
            <td style="font-size:15px;width: 25%;border-top:2px solid;border-left:2px solid;border-right:2px solid;">No Kwitansi : </td>
            <td style="font-size:15px;width: 75%;border-top:2px solid;border-right:2px solid;"> <?php echo $dp['nokwitansi']; ?></td>
        </tr>
        <tr>
            <td style="font-size:15px;border-bottom:2px solid;border-left:2px solid;border-right:2px solid;">No SO : </td>
            <td style="font-size:15px;border-bottom:2px solid;border-right:2px solid;"> <?php echo $detail_harga['noso']; ?></td>
        </tr>
    </table>
    <br>
    <table style="width: 100%;" style="font-size: 10px;" cellspacing="0" cellpadding="3">
        <tr>
            <td style="font-size:15px;width: 25%;border-top:2px solid;border-left:2px solid;border-right:2px solid;">Telah Terima Dari : </td>
            <td style="font-size:15px;width: 75%;border-top:2px solid;border-right:2px solid;"> <?php echo $detail_customer['nama_customer'];?></td>
        </tr>
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;"></td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"></td>
        </tr>
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Terbilang : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"> <?php echo ucwords(terbilang($total_kwitansi)); ?></td>
        </tr>  
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Untuk Pembayaran : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"> 
                <u><?php echo $descDp;?></u> PEMBELIAN SATU UNIT SMH TIPE <?php echo $detail_penerimaan_motor['tipe']; ?> WARNA <?php echo $detail_penerimaan_motor['warna']; ?> <br>
                SECARA <?php echo strtoupper($detail_harga['cara_pembelian']); ?> <?php echo ($detail_harga['cara_pembelian']=="Kredit"? strtoupper($detail_leasing['leasing']):""); ?> A/N <?php echo strtoupper($detail_customer['nama_customer']); ?>
            </td>
        </tr>  
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Jumlah Rp : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"> <?php echo formatrp($total_kwitansi); ?>,00</td>
        </tr>
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;border-bottom:2px solid;">Nomor Mesin : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;border-bottom:2px solid;"> <?php echo $detail_penerimaan_motor['nomesin']; ?></td>
        </tr>
    </table>
    <div style="text-align: right;padding-right: 30px;">
        Jakarta, <?php echo tanggalan(date('Y-m-d')); ?>
    </div>
    <br/>
    <center>
        <table style="font-size: 15px;" cellpadding="3">
            <tr>
                <td style="font-size:15px;width: 30%;text-align: center;">Kasir</td>
                <td style="font-size:15px;width: 30%;text-align: center;">Mengetahui</td>
                <td style="font-size:15px;width: 30%;text-align: center;">Penerima</td>
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
                <td style="width: 30%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            </tr>
        </table>
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