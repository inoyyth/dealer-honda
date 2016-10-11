<table border="1" cellpadding="2">
        <tr>
            <td align="center">Jabatan</td>
			<td align="center">Keterangan</td>
			<td align="center">Status</td>
        </tr>
		<?php foreach($data as $kList=>$vList){ ?>
			<tr>
				<td><?php echo $vList['jabatan'];?></td>
				<td><?php echo $vList['keterangan'];?></td>
				<td><?php echo get_status($vList['status_jabatan']);?></td>
			</tr>
		<?php } ?>
    </table>