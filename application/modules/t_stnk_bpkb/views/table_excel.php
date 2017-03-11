<table border="1" cellpadding="2">
    <tr>
        <td align="center">No.SO</td>
        <td align="center">No.Process</td>
        <td align="center">Customer</td>
        <td align="center">STNK Date</td>
        <td align="center">BPKB Date</td>
    </tr>
    <?php foreach ($list as $kList => $vList) { ?>
        <tr>
            <td><?php echo $vList['no_so']; ?></td>
            <td><?php echo $vList['no_process']; ?></td>
            <td><?php echo $vList['t_stnk_nama']; ?></td>
            <td><?php echo $vList['stnk_estimate_date']; ?></td>
            <td><?php echo $vList['bpkb_estimate_date']; ?></td>
        </tr>
    <?php } ?>
</table>