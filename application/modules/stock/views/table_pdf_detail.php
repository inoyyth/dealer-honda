<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
        <tr>
            <td align="center">No.</td>
            <td align="center">Tahun</td>
            <td align="center">No SJ</td>
            <td align="center">Tgl SJ</td>
            <td align="center">No Mesin</td>
            <td align="center">No Rangka</td>
            <td align="center">Tipe</td>
            <td align="center">Warna</td>
        </tr>
        <?php foreach ($list as $kList => $vList) { ?>
            <tr>
                <td><?php echo $kList+1; ?></td>
                <td><?php echo $vList['tahun']; ?></td>
                <td><?php echo $vList['no_sj']; ?></td>
                <td><?php echo $vList['tgl_sj']; ?></td>
                <td><?php echo $vList['nomesin']; ?></td>
                <td><?php echo $vList['norangka']; ?></td>
                <td><?php echo $vList['tipe']; ?></td>
                <td><?php echo $vList['warna']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>