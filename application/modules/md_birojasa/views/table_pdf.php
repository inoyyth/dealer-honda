<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
    <tr>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Handphone</th>
        <th>Alamat</th>
        <th>PIC</th>
        <th>Kontak PIC</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $vList['nama_birojasa'];?></td>
            <td><?php echo $vList['telepon_birojasa'];?></td>
            <td><?php echo $vList['handphone_birojasa'];?></td>
            <td><?php echo $vList['alamat_birojasa'];?></td>
            <td><?php echo $vList['pic_birojasa'];?></td>
            <td><?php echo $vList['pic_kontak_birojasa'];?></td>
            <td><?php echo $vList['email_birojasa'];?></td>
            <td><?php echo get_status($vList['status_birojasa']);?></td>
        </tr>
    <?php } ?>
</table>
</div>