<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Mata Kuliah</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3">Tampil Data Matakuliah</th>
			</tr>

			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>

			<tr>
				<th>Kode MATKUL</th>
				<th>:</th>
				<td>
					<?= $kode; ?>
				</td>
			</tr>

			<tr>
				<td>Nama MATKUL</td>
				<td>:</td>
				<td>
					<?= $nama; ?>
				</td>
			</tr>

			<tr>
				<td>SKS</td>
				<td>:</td>
				<td>
					<?= $sks; ?>
				</td>
			</tr>

			<tr><td colspan="3" align="center"><a href="<?= base_url('Matakuliah');?>"></tr>
		</table>
	</center>

</body>
</html>