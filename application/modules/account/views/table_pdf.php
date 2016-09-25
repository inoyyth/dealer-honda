<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
        <tr>
            <td align="center">Jabatan</td>
			<td align="center">Keterangan</td>
			<td align="center">Status</td>
        </tr>
		<?php foreach($list as $kList=>$vList){ ?>
			<tr>
				<td><?php echo $vList['jabatan'];?></td>
				<td><?php echo $vList['keterangan'];?></td>
				<td><?php echo get_status($vList['status']);?></td>
			</tr>
		<?php } ?>
    </table>
</div>