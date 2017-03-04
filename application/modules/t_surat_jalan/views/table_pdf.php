<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
        <tr>
            <td align="center">No.SJ</td>
            <td align="center">No.PDI</td>
            <td align="center">No.SO</td>
            <td align="center">PDI Date</td>
            <td align="center">Print Date</td>
            <td align="center">Print User</td>
        </tr>
        <?php foreach ($list as $kList => $vList) { ?>
            <tr>
                <td><?php echo $vList['nosj']; ?></td>
                <td><?php echo $vList['kdpdi']; ?></td>
                <td><?php echo $vList['noso']; ?></td>
                <td><?php echo $vList['tgl_pdi']; ?></td>
                <td><?php echo $vList['sj_print_date']; ?></td>
                <td><?php echo $vList['nama_lengkap']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>