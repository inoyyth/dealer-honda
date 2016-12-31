<?php
    $kwt_explode = explode("/",$detail_harga['noso']);
?>
<div style="text-align: center;font-weight: bolder;">
    TANDA TERIMA
</div>
<br>
<table style="font-size: 12px;" cellpadding="3">
    <tr>
        <td style="width: 100px;">No Kwitansi</td>
        <td style="font-weight: bold;">: <?php echo "KWT-" . $kwt_explode[1] . "-" . $kwt_explode[2] . "-" . $kwt_explode[3]; ?></td>
    </tr>
    <tr>
        <td>No SO</td>
        <td style="font-weight: bold;">: <?php echo $detail_harga['noso']; ?></td>
    </tr>
</table>
<hr>
<br>
<br>
<div> </div>
<table style="font-size: 12px;" cellpadding="4">
    <tr>
        <td style="width: 120px;">Telah Terima Dari</td>
        <td colspan="3" style="font-weight: bold;">: <?php echo ucwords($detail_harga['marketing']);?></td>
    </tr>
    <tr>
        <td>Uang Sejumlah</td>
        <td colspan="2" style="font-weight: bold;">: <?php echo ucwords(terbilang($detail_harga['fee'])); ?></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>Untuk Pembayaran</td>
        <td colspan="2" style="font-weight: bold;">: FEE </td>
    </tr>
    <tr>
        <td>Detail Motor</td>
        <td colspan="3">: 
            - No. Mesin: <?php echo $detail_penerimaan_motor['nomesin'];?> <br>
            - No. Rangka: <?php echo $detail_penerimaan_motor['norangka'];?> <br>
            - Type: <?php echo $detail_penerimaan_motor['tipe'];?> <br>
            - Warna: <?php echo $detail_penerimaan_motor['warna'];?> <br>
            - Tahun: <?php echo $detail_penerimaan_motor['tahun'];?> <br>
        </td>
    </tr>
    <tr>
        <td>Jumlah </td>
        <td style="width: 200px;font-weight: bold;">: Rp. <?php echo formatrp($detail_harga['fee']);?>,00</td>
        <td style="width: 80px;">Secara <?php echo $detail_harga['cara_pembelian'];?></td>
        <td style="font-weight: bold;">: <?php echo $detail_leasing['leasing'];?></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="2" style="text-align: right;width: 500px;"> Jakarta, <?php echo tanggalan(date('Y-m-d'));?> </td>
    </tr>
</table>
<br>
<br>
<br>
<table style="font-size: 12px;" cellpadding="3">
    <tr>
        <td style="width: 30%;text-align: center;">Kasir</td>
        <td style="width: 30%;text-align: center;">Mengetahui</td>
        <td style="width: 30%;text-align: center;">Penerima</td>
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