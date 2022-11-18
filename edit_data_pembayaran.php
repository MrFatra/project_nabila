<!DOCTYPE html>
<html>
<head>
	<title>strong yoo</title>
</head>
<body>
 
	<h2>DATA PEMBAYARAN SYAHRIAH PONPES MIFTAHUL FALAH</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PEMBAYARAN</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from bayar_spp where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kobong</td>
					<td><input type="text" name="nim" value="<?php echo $d['kobong']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Pembayaran</td>
					<td><input type="date" name="tanggal_pembayaran" value="<?php echo $d['tanggal_pembayaran']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah Pembayaran</td>
					<td><input type="text" name="jumlah_pembayaran" value="<?php echo $d['jumlah_pembayaran']; ?>"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>