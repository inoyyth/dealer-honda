<div style="font-size:  10px;">
    <table border="1" cellpadding="2" width="100%">
    <tr>
        <td align="center" width="20%">Kode Kwitansi</td>
        <td align="center" width="20%">No. SO</td>
        <td align="center" width="15%">DP System</td>
        <td align="center" width="15%">Tagihan</td>
        <td align="center" width="10%">Subsidi 1</td>
        <td align="center" width="10%">Subsidi 2</td>
        <td align="center" width="10%">Status</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $vList['nokwitansi'];?></td>
            <td><?php echo $vList['noso'];?></td>
            <td align="right"><?php echo formatrp($vList['dp_system']);?></td>
            <td align="right"><?php echo formatrp($vList['tagih']);?></td>
            <td align="right"><?php echo formatrp($vList['subsidi1']);?></td>
            <td align="right"><?php echo formatrp($vList['subsidi2']);?></td>
            <td align="center"><?php echo get_status($vList['m_status']);?></td>
        </tr>
    <?php } ?>
</table>
</div>