<?php
$kwt_explode = explode("/", $list->noso);
?>
<style>
    body {
        font-family: "Times New Roman", Times, serif;
        letter-spacing: 2px;
        font-size: 12px;
    }
    @media print {
        .no-print, .no-print * { display: none !important; }
        font-family: "Times New Roman", Times, serif;
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
    <div style="text-align: center;">
        == TANDA TERIMA (KWITANSI A) ==
         
    </div>
    
    <br>
   
    <br>
    <table style="width: 100%;" style="font-size: 10px;" cellspacing="0" cellpadding="3">
        <tr>
            <td style="font-size:15px;width: 25%;border-top:2px solid;border-left:2px solid;border-right:2px solid;">No Kwitansi : </td>
            <td style="font-size:15px;width: 75%;border-top:2px solid;border-right:2px solid;">  <?php echo "KWT-" . $kwt_explode[1] . "-" . $kwt_explode[2] . "-" . $kwt_explode[3]; ?> <b> C </b> </td>
        </tr>
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Telah Terima Dari : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"> <?php echo $list->nama_customer; ?> 
                
            </td>
        </tr>  
        
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Uang Sejumlah : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;"> <?php echo $list->subsidi2;  ?></td>
        </tr>  
       
        
         <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">Untuk Pembayaran : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;">  <?php echo $list->kalimat_kw_2; ?>
            </td>
        </tr>  
        
         <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">No.Rangka : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;">   <?php echo $list->norangka;  ?>    </td>
        </tr> 
        
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;">No.Mesin : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;">   <?php echo $list->nomesin;  ?>    </td>
        </tr> 
         
        <tr>
            <td style="font-size:15px;width: 25%;border-left:2px solid;border-right:2px solid;border-bottom:2px solid;">Jumlah : </td>
            <td style="font-size:15px;width: 75%;border-right:2px solid;border-bottom:2px solid;"> <?php echo formatrp($list->dp_system); ?></td>
        </tr>
    </table>
    <div style="text-align: right;padding-right: 30px;">
        Jakarta, <?php echo tanggalan(date('Y-m-d')); ?>
    </div>
    <br/>
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