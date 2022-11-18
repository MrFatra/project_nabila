<!DOCTYPE html>
<html>

<head>
	<title>data santri</title>
</head>

<body>

	<h2>DATA SANTRI</h2>
	<br />
	<a href="index.php">KEMBALI</a>
	<br />
	<br />
	<h3>TAMBAH DATA SANTRI</h3>
	<form method="POST" action="proses_tambah_data_santri.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr>
				<td>Nama Orang Tua</td>
				<td><input type="text" name="nama_orang_tua"></td>
			</tr>

			<tr>
				<td>Kobong</td>
				<td><input type="text" name="kobong"></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><input type="text" name="desa"></td>
			</tr>
			<td>Kecamatan</td>
			<td><input type="text" name="kecamatan"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" name="simpan"></td>
			</tr>
		</table>
	</form>
</body>

</html>