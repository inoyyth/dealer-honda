<table border="1" cellpadding="2">
    <tr>
        <td align="center">Kode</td>
        <td align="center">Nama</td>
        <td align="center">Kategori</td>
        <td align="center">Status</td>
    </tr>
    <?php foreach ($list as $kList => $vList) { ?>
        <tr>
            <td><?php echo $vList['kd_aksesoris']; ?></td>
            <td><?php echo $vList['aksesoris']; ?></td>
            <td><?php echo $vList['value']; ?></td>
            <td><?php echo get_status($vList['m_status']); ?></td>
        </tr>
    <?php } ?>
</table>