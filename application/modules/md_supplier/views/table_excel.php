<table border="1" cellpadding="2">
    <tr>
        <td align="center">Kode</td>
        <td align="center">Supplier</td>
        <td align="center">Alamat</td>
        <td align="center">Telepon</td>
        <td align="center">PIC</td>
        <td align="center">HP</td>
        <td align="center">Status</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo strtoupper($vList['kdsupplier']);?></td>
            <td><?php echo $vList['supplier'];?></td>
            <td><?php echo $vList['alamat'];?></td>
            <td><?php echo $vList['telp'];?></td>
            <td><?php echo $vList['pic'];?></td>
            <td><?php echo $vList['hp'];?></td>
            <td><?php echo get_status($vList['m_status']);?></td>
        </tr>
    <?php } ?>
</table>