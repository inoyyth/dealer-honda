<table border="1" cellpadding="2">
    <tr>
        <td align="center" style="width: 20px;">No</td>
        <td align="center">NO.SO</td>
        <td align="center">Void Date</td>
        <td align="center">PIC</td>
        <td align="center" style="width: 240px;">Desc.</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $kList+1;?></td>
            <td><?php echo $vList['noso'];?></td>
            <td><?php echo $vList['void_date'];?></td>
            <td><?php echo $vList['nama_lengkap'];?></td>
            <td><?php echo $vList['void_description'];?></td>
        </tr>
    <?php } ?>
</table>