<!DOCTYPE html>
<html>

<head>
	<title>bismillah</title>
</head>

<body>

	<h2>DATA SANTRI SYAHRIAH PONPES MIFTAHUL FALAH</h2>
	<br />
	<a href="tambah_data_santri.php">+ TAMBAH DATA</a>
	<br />
	<br />
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>NIK</th>
			<th>Nama Orang Tua</th>
			<th>Kobong</th>
			<th>Desa</th>
			<th>Kecamatan</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from data_santri ");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>

				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tanggal_lahir']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama_orang_tua']; ?></td>
				<td><?php echo $d['kobong']; ?></td>
				<td><?php echo $d['desa']; ?></td>
				<td><?php echo $d['kecamatan']; ?></td>
				<td>
					<a href="edit_data_santri.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_data_santri.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>