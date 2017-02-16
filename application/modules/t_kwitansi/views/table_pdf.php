<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
    <tr>
        <td align="center" style="width: 150px;">No.Kwitansi</td>
        <td align="center" style="width: 150px;">No.So</td>
        <td align="center" style="width: 110px;">Customer</td>
        <td align="center" style="width: 70px;">DP Ke</td>
        <td align="center" style="width: 70px;">Tgl</td>
        <td align="center" style="width: 80px;">Nominal</td>
    </tr>
    <?php foreach($list as $kList=>$vList){ ?>
        <tr>
            <td><?php echo $vList['nokwitansi'];?></td>
            <td><?php echo $vList['noso'];?></td>
            <td><?php echo $vList['nama_customer'];?></td>
            <td><?php echo $vList['transaksi'];?></td>
            <td><?php echo $vList['tgl_dp'];?></td>
            <td><?php echo formatrp($vList['nominal']);?></td>
        </tr>
    <?php } ?>
</table>
</div>