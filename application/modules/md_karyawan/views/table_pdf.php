<div style="font-size:  10px;">
    <table border="1" cellpadding="2">
        <tr>
            <td align="center">Kode</td>
			<td align="center">Nama</td>
            <td align="center">Jabtan</td>
            <td align="center">Tgl Masuk</td>
            <td align="center">Tgl Keluar</td>
			<td align="center">Status</td>
        </tr>
		<?php foreach($list as $kList=>$vList){ ?>
			<tr>
				<td><?php echo $vList['kd_karyawan'];?></td>
				<td><?php echo $vList['karyawan'];?></td>
                <td><?php echo $vList['kd_jabatan_karyawan'];?></td>
                <td><?php echo $vList['tgl_masuk'];?></td>
                <td><?php echo $vList['tgl_keluar'];?></td>
				<td><?php echo get_status($vList['status_karyawan']);?></td>
			</tr>
		<?php } ?>
    </table>
</div>