<!DOCTYPE html>
<html>

<head>
	<title>lahaula bae</title>
</head>

<body>

	<h2>DATA PEMBAYARAN SYAHRIAH</h2>
	<br />
	<a href="index.php">KEMBALI</a>
	<br />
	<br />
	<h3>TAMBAH DATA PEMBAYARAN</h3>
	<form method="POST" action="proses_tambah_data_pembayaran.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kobong</td>
				<td><input type="text" name="kobong"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Tanggal Pembayaran</td>
				<td><input type="date" name="tanggal_pembayaran"></td>
			</tr>
			<tr>
				<td>Jumlah Pembayaran</td>
				<td><input type="text" name="jumlah_pembayaran"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" name="simpan"></td>
			</tr>
		</table>
	</form>
</body>

</html>