<table border="1" cellpadding="2">
    <tr>
        <td align="center">Kode</td>
        <td align="center">Leasing</td>
        <td align="center">Alamat</td>
        <td align="center">Telepon</td>
        <td align="center">Email</td>
        <td align="center">PIC</td>
        <td align="center">Status</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $vList['kd_leasing'];?></td>
            <td><?php echo $vList['leasing'];?></td>
            <td><?php echo $vList['alamat'];?></td>
            <td><?php echo $vList['telepon'];?></td>
            <td><?php echo $vList['email'];?></td>
            <td><?php echo $vList['pic'];?></td>
            <td><?php echo get_status($vList['status_leasing']);?></td>
        </tr>
    <?php } ?>
</table>