<!DOCTYPE html>
<html>
<head>
	<title>strong yoo</title>
</head>
<body>
 
	<h2>DATA SANTRI PONPES MIFTAHUL FALAH</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA SANTRI</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data_santri where id='$id'");
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
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td><input type="text" name="nik" value="<?php echo $d['nik']; ?>"></td>
				</tr>
				<tr>
					<td>Nama Orang Tua</td>
					<td><input type="text" name="nama_orang_tua" value="<?php echo $d['nama_orang_tua']; ?>"></td>
				</tr>
				<tr>
					<td>Kobong</td>
					<td><input type="text" name="kobong" value="<?php echo $d['kobong']; ?>"></td>
				</tr>
				<tr>
					<td>Desa</td>
					<td><input type="text" name="desa" value="<?php echo $d['desa']; ?>"></td>
				</tr>
				<tr>
					<td>Kecamatan</td>
					<td><input type="text" name="kecamatan" value="<?php echo $d['kecamatan']; ?>"></td>
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