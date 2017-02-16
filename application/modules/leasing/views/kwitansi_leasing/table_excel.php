
<table border="1" cellpadding="2">
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
            <td align="right"><?php echo number_format($vList['dp_system'],0,".",",");?></td>
            <td align="right"><?php echo number_format($vList['tagih'],0,".",",");?></td>
            <td align="right"><?php echo number_format($vList['subsidi1'],0,".",",");?></td>
            <td align="right"><?php echo number_format($vList['subsidi2'],0,".",",");?></td>
            <td align="center"><?php echo get_status($vList['m_status']);?></td>
        </tr>
    <?php } ?>
</table>