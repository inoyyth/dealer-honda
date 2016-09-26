<table border="1" cellpadding="2">
        <tr>
            <td align="center">Username</td>
			<td align="center">Nama Lengkap</td>
            <td align="center">Telepon</td>
            <td align="center">Email</td>
            <td align="center">Last Login</td>
			<td align="center">Status</td>
        </tr>
		<?php foreach($list as $kList=>$vList){ ?>
			<tr>
				<td><?php echo $vList['username'];?></td>
				<td><?php echo $vList['nama_lengkap'];?></td>
                <td><?php echo $vList['no_telp'];?></td>
                <td><?php echo $vList['email'];?></td>
                <td><?php echo $vList['last_login'];?></td>
				<td><?php echo get_status($vList['status']);?></td>
			</tr>
		<?php } ?>
    </table>