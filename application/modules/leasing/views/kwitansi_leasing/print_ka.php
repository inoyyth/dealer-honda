<?php
if(count($list) == 0){
    echo "<h4>Data belum disimpan !</h4>";
    die();
}
$kwt_explode = explode("/", $list->nokwitansi);
$noKwitansi = str_replace("/", "-", $list->nokwitansi);
//echo $list->nokwitansi;die();
?>

<title>Kwitansi Leasing A</title>

<style>
    body {
        font-family: "Times New Roman", Times, serif;
        letter-spacing: 5px;
        font-size: 12px;
    }
    @media print {
        .no-print, .no-print * { display: none !important; }
        font-family: "Times New Roman", Times, serif;
        letter-spacing: 5px;
        font-size: 12px;
    }
</style>
<body>
    <div style="font-weight:bold;">PT. Mandala Kekar Abadi</div>
    <div>Dealer Resmi Sepeda Motor Honda</div>
    <div>Jl. Raya Bekasi Timur No. 158 Cipinang Jakarta Timur</div>
    <div>Telp.(021)6198464,8517484,8517620 Fax.:(021)8514855</div>
    <br>
    <div style="text-align: center;">
        == TANDA TERIMA (KWITANSI A) ==

    </div>

    <br>

    <br>
    <table style="width: 100%;" style="font-size: 10px;" cellspacing="0" cellpadding="3">
        <tr>
            <td style="font-size:15px;width: 25%;border-top:2px solid;border-left:2px solid;border-right:2px solid;">No Kwitansi : </td>
            <td style="font-size:15px;width: 75%;border-top:2px solid;border-right:2px solid;">  <?php echo $noKwitansi; ?><b>A</b> </td>
        </tr>
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Telah Terima Dari : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"> <?php echo $list->leasing; ?> 
                <u> </u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                QQ  : <?= $list->nama_customer; ?>
            </td>
        </tr>  

        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Uang Sejumlah : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;background-color: #ccc;font-weight: bold;"> <?php echo terbilang($list->tagihan); ?></td>
        </tr>  


        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Untuk Pembayaran : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"> 
                <u>PELUNASAN</u> PEMBELIAN SATU UNIT SEPEDA MOTOR HONDA
            </td>
        </tr>
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;"></td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"> 
                TIPE : <?= $list->nama_motor; ?>  <?php echo $list->tipe; ?> SECARA <u> KREDIT </u>
            </td>
        </tr>

        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">No.Rangka : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;">   <?php echo $list->norangka; ?>    </td>
        </tr> 

        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">No.Mesin : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;">   <?php echo $list->nomesin; ?>    </td>
        </tr> 

        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;border-bottom:2px solid;">Jumlah : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;border-bottom:2px solid;">Rp. <?php echo formatrp($list->tagihan); ?></td>
        </tr>
        
    </table>
    <div style="float:right;width:30%;text-align: center;padding-right: 30px;">
        Jakarta, <?php echo tanggalan(date('Y-m-d')); ?>
    </div>
    <br/><br/><br/><br/><br/><br/><br/>
    <div style="float:right;width:30%;text-align: center;padding-right: 30px;">
        PT. MANDALA KEKAR ABADI
    </div>
    
<center>

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