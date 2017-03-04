<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
    <tr>
        <td align="center">Kd.PDI</td>
        <td align="center">No.SO</td>
        <td align="center">Date</td>
        <td align="center">Pic</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $vList['kdpdi']; ?></td>
            <td><?php echo $vList['noso']; ?></td>
            <td><?php echo $vList['tgl_pdi']; ?></td>
            <td><?php echo $vList['pic']; ?></td>
        </tr>
    <?php } ?>
</table>
</div>