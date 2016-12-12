<table border="1" cellpadding="2">
        <tr>
            <td align="center">Gudang</td>
            <td align="center">Tipe</td>
            <td align="center">Warna</td>
            <td align="center">Stock</td>
        </tr>
        <?php foreach ($list as $kList => $vList) { ?>
            <tr>
                <td><?php echo $vList['gudang']; ?></td>
                <td><?php echo $vList['tipe']; ?></td>
                <td><?php echo $vList['warna']; ?></td>
                <td><?php echo $vList['stok']; ?></td>
            </tr>
        <?php } ?>
    </table>