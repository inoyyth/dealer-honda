<?php
if(count($list) == 0){
    echo "<h4>Data belum disimpan !</h4>";
    die();
}
$kwt_explode = explode("/", $list->noso);
$noKwitansi = str_replace("/", "-", $list->nokwitansi);
?>
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
        == TANDA TERIMA (KWITANSI B) ==

    </div>

    <br>

    <br>
    <table style="width: 100%;" style="font-size: 10px;" cellspacing="0" cellpadding="1">
        <tr>
            <td style="font-size:12px;width: 25%;border-top:2px solid;border-left:2px solid;border-right:2px solid;">No Kwitansi : </td>
            <td style="font-size:12px;width: 75%;border-top:2px solid;border-right:2px solid;">  <?php echo $noKwitansi; ?><b>B</b></td>
        </tr>
        <tr>
            <td style="font-size:12px;width: 25%;border-left:2px solid;border-right:2px solid;">Telah Terima Dari : </td>
            <td style="font-size:12px;width: 75%;border-right:2px solid;"> <?php echo $list->nama_customer; ?> 

            </td>
        </tr>  

        <tr>
            <td style="font-size:12px;width: 25%;border-left:2px solid;border-right:2px solid;">Uang Sejumlah : </td>
            <td style="font-size:12px;width: 75%;border-right:2px solid;font-weight: bold;background-color: #ccc;"> <?php echo terbilang($list->dp_system); ?></td>
        </tr>  


        <tr>
            <td style="font-size:12px;width: 25%;border-left:2px solid;border-right:2px solid;">Untuk Pembayaran : </td>
            <td style="font-size:12px;width: 75%;border-right:2px solid;"> 
                KWITANSI DP SYSTEM
            </td>
        </tr>
        <tr>
            <td style="font-size:12px;width: 25%;border-left:2px solid;border-right:2px solid;"></td>
            <td style="font-size:12px;width: 75%;border-right:2px solid;"> 
                TIPE : <?php echo $list->nama_motor; ?> <?php echo $list->tipe; ?>  SECARA <u> KREDIT </u>
            </td>
        </tr>

        <tr>
            <td style="font-size:12px;width: 25%;border-left:2px solid;border-right:2px solid;">No.Rangka : </td>
            <td style="font-size:12px;width: 75%;border-right:2px solid;">   <?php echo $list->norangka; ?>    </td>
        </tr> 

        <tr>
            <td style="font-size:12px;width: 25%;border-left:2px solid;border-right:2px solid;">No.Mesin : </td>
            <td style="font-size:12px;width: 75%;border-right:2px solid;">   <?php echo $list->nomesin; ?>    </td>
        </tr> 

        <tr>
            <td style="font-size:12px;width: 25%;border-left:2px solid;border-right:2px solid;border-bottom:2px solid;">Jumlah : </td>
            <td style="font-size:12px;width: 75%;border-right:2px solid;border-bottom:2px solid;">Rp. <?php echo formatrp($list->dp_system); ?></td>
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