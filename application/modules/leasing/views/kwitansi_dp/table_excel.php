<<<<<<< HEAD
<table border="1" cellpadding="2">
    <tr>
        <td align="center">Kode</td>
        <td align="center">Nama</td>
        <td align="center">Alamat</td>
        <td align="center">Telepon</td>
        <td align="center">Status</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $vList['kd_gudang'];?></td>
            <td><?php echo $vList['gudang'];?></td>
            <td><?php echo $vList['alamat'];?></td>
            <td><?php echo $vList['telepon'];?></td>
            <td><?php echo get_status($vList['status_gudang']);?></td>
        </tr>
    <?php } ?>
=======
<table border="1" cellpadding="2">
    <tr>
        <td align="center">Kode</td>
        <td align="center">Nama</td>
        <td align="center">Alamat</td>
        <td align="center">Telepon</td>
        <td align="center">Status</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $vList['kd_gudang'];?></td>
            <td><?php echo $vList['gudang'];?></td>
            <td><?php echo $vList['alamat'];?></td>
            <td><?php echo $vList['telepon'];?></td>
            <td><?php echo get_status($vList['status_gudang']);?></td>
        </tr>
    <?php } ?>
>>>>>>> 5187a3d2538e0b25c0d07d4a259ea675a4f66fe0
</table>