<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
        <tr>
            <td align="center">No.SO</td>
            <td align="center">NO.Mesin</td>
            <td align="center">Harga</td>
            <td align="center">Tipe</td>
            <td align="center">Cara Beli</td>
            <td align="center">Status</td>
        </tr>
        <?php
        foreach ($list as $kList => $vList) {
            switch ($vList['m_status']) {
                case 1:
                    $status = "On Process";
                    break;
                case 2:
                    $status = "Canceled";
                    break;
                case 3:
                    $status = "Deleted";
                    break;
                case 4:
                    $status = "Void";
                    break;
                case 5:
                    $status = "Finish";
                    break;
            }
        ?>
            <tr>
                <td><?php echo $vList['noso']; ?></td>
                <td><?php echo $vList['nomsn']; ?></td>
                <td><?php echo formatrp($vList['harga_otr']); ?></td>
                <td><?php echo $vList['tipe']; ?></td>
                <td><?php echo $vList['cara_pembelian']; ?></td>
                <td><?php echo $status; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>