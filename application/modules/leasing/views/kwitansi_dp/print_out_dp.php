<?php
    //$kwt_explode = explode("/",$detail_harga['noso']);
?>
<div style="text-align: center;font-weight: bolder;">
    TANDA TERIMA
</div>
<br>
<table style="font-size: 12px;" cellpadding="3">
    <tr>
        <td style="width: 100px;">No Kwitansi</td>
        <td style="font-weight: bold;">: <?php echo $parsing->nokwitansi; ?></td>
    </tr>
    <tr>
        <td>No SO</td>
        <td style="font-weight: bold;">: <?php echo $parsing->noso;  ?></td>
    </tr>
</table>
<hr>
<br>
<br>
<div> </div>
<table style="font-size: 12px;" cellpadding="4">
    <tr>
        <td style="width: 120px;">Telah Terima Dari</td>
        <td colspan="3" style="font-weight: bold;">: <?php  echo $parsing->nama_customer; ?></td>
    </tr>
    <tr>
        <td>Uang Sejumlah</td>
        <td colspan="2" style="font-weight: bold;">: <?php echo ucwords(terbilang($parsing->nominal)); ?></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>Untuk Pembayaran</td>
        <td colspan="2" style="font-weight: bold;">: DP Ke <?php echo $parsing->transaksi; ?> </td>
    </tr>
    <tr>
        <td>Detail Motor</td>
        <td colspan="3">: 
            - No. Mesin: <?php echo  $parsing->nomesin;?> <br>
            - No. Rangka: <?php echo $parsing->norangka;?> <br>
            - Type: <?php echo  $parsing->tipe;?> <br>
            - Warna:<?php echo  $parsing->warna;?> <br>
            - Tahun: <?php echo $parsing->tahun;?><br>
        </td>
    </tr>
    <tr>
        <td>Jumlah </td>
        <td style="width: 200px;font-weight: bold;">: Rp. <?php echo formatrp($parsing->nominal);?>,00</td>
        <td style="width: 100px;">Secara <?php echo $parsing->cara_pembelian . '-'. $parsing->leasing;?> </td>
      
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
        <td style="width: 30%;text-align: center;"> </td>
        <td style="width: 30%;text-align: center;">Mengetahui</td>
        <td style="width: 30%;text-align: center;">Kasir</td>
    </tr>
    <tr>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td style="width: 30%;text-align: center;"> </td>
        <td style="width: 30%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
        <td style="width: 30%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
    </tr>
</table>