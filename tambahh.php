<!DOCTYPE html>
<html>
<head>
	<title>data santri</title>
</head>
<body>
 
	<h2>DATA SANTRI</h2>
	<br/>
	<a href="index.html">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA SANTRI</h3>
	<form method="POST" action="tambah_aksi.php">
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
				<td><input type="submit" value="Simpan" name="Simpan"></td>
			</tr>		
		</table>
	</form>
</body>
</html>