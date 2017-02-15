<div style="font-size: 8px;">
    <table border="1" cellpadding="2">
        <tr>
            <td align="center">Tipe Motor</td>
            <td align="center">Nama Motor</td>
            <td align="center">Varian</td>
            <td align="center">Merk</td>
            <td align="center">Harga Otr</td>
        </tr>
        <?php foreach($list as $kList=>$vList){ ?>
            <tr>
                <td><?php echo $vList['tipe_motor'];?></td>
                <td><?php echo $vList['nama_motor'];?></td>
                <td><?php echo $vList['varian'];?></td>
                <td><?php echo $vList['merk'];?></td>
                <td><?php echo formatrp($vList['harga_otr']);?></td>
            </tr>
        <?php } ?>
    </table>
</div>