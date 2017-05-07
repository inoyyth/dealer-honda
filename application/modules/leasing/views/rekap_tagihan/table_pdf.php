<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
    <tr>
        <td align="center">No. Tagihan</td>
        <td align="center">Tgl. Tagihan</td>
        <td align="right">Total Tagihan</td>
        <td align="center">Leasing</td>
        <td align="left">Cabang</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td align="center"><?php echo $vList['no_tagihan'];?></td>
            <td align="center"><?php echo $vList['tgl_tagihan'];?></td>
            <td align="right"><?php echo formatrp($vList['tot_tagihan']);?></td>
            <td align="center"><?php echo $vList['kdleasing'];?></td>
            <td><?php echo $vList['cabang_leasing'];?></td>
        </tr>
    <?php } ?>
</table>
</div>