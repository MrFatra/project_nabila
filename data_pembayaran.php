<!DOCTYPE html>
<html>
<head>
	<title>bismillah</title>
</head>
<body>
 
	<h2>DATA PEMBAYARAN SYAHRIAH PONPES MIFTAHUL FALAH</h2>
	<br/>
	<a href="tambahh.php">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Kobong</th>
			<th>Alamat</th>
			<th>Tanggal Pembayaran</th>
			<th>Jumlah Pembayaran</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from bayar_spp ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>

				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['kobong']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['tanggal_pembayaran']; ?></td>
				<td><?php echo $d['jumlah_pembayaran']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>