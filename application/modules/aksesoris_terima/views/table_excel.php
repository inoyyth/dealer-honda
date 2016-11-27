<table border="1" cellpadding="2">
    <tr>
        <td align="center">Kode</td>
        <td align="center">Nama</td>
        <td align="center">Jumlah</td>
        <td align="center">Gudang</td>
    </tr>
    <?php foreach ($list as $kList => $vList) { ?>
        <tr>
            <td><?php echo $vList['kd_aksesoris']; ?></td>
            <td><?php echo $vList['aksesoris']; ?></td>
            <td><?php echo $vList['jumlah']; ?></td>
            <td><?php echo $vList['gudang']; ?></td>
        </tr>
    <?php } ?>
</table>