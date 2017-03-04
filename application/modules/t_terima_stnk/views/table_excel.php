<table border="1" cellpadding="2">
    <tr>
        <td align="center">No.Process</td>
        <td align="center">Birojasa</td>
        <td align="center">No.Polisi</td>
        <td align="center">No.STNK</td>
        <td align="center">No.BPKB</td>
    </tr>
    <?php foreach ($list as $kList => $vList) { ?>
        <tr>
            <td><?php echo $vList['no_process']; ?></td>
            <td><?php echo $vList['nama_birojasa']; ?></td>
            <td><?php echo $vList['t_terima_no_polisi']; ?></td>
            <td><?php echo $vList['t_terima_no_stnk']; ?></td>
            <td><?php echo $vList['t_terima_no_bpkb']; ?></td>
        </tr>
    <?php } ?>
</table>