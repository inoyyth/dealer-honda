<table border="1" cellpadding="2">
    <tr>
        <td align="center">KTP</td>
        <td align="center">Nama</td>
        <td align="center">TTL</td>
        <td align="center">Kelamin</td>
        <td align="center">Alamat</td>
        <td align="center">Telp</td>
        <td align="center">HP</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $vList['no_ktp'];?></td>
            <td><?php echo $vList['nama_customer'];?></td>
            <td><?php echo $vList['tempat_lahir_customer'].", ".$vList['tanggal_lahir_customer'];?></td>
            <td><?php echo ($vList['kelamin_customer']=="P"?"Pria":"Wanita");?></td>
            <td><?php echo $vList['alamat_customer'];?></td>
            <td><?php echo $vList['telepon_customer'];?></td>
            <td><?php echo $vList['handphone_customer'];?></td>
        </tr>
    <?php } ?>
</table>