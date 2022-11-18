<?php

require 'cek_login.php';

$pesan = '';

require 'koneksi.php';

if (isset($_POST['submit'])) {
	// Tampung data input
	//! Ganti
	$username = $_POST['username'];
	$password = $_POST['password'];

	//! Ganti
	$query = "SELECT * FROM pengguna WHERE username='$username'";
	// Eksekusi perintah sql
	$result = mysqli_query($koneksi, $query);

	// Cek jumlah baris
	if (mysqli_num_rows($result) == 1) {
		// Menampung 1 baris data
		$pengguna = mysqli_fetch_assoc($result);

		// Komparasi password
		if (password_verify($password, $pengguna['password'])) {
			$_SESSION['status_login'] = "yes";
			$_SESSION['nama'] = $pengguna['nama'];

			header("Location:index.php");
		} else {
			$pesan = "Password salah";
		}
	} else {
		$pesan = "Username salah";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>login admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form action="index.html" method="post">


		<div class="kotak_login">
			<p class="tulisan_login">Silahkan login</p>

			<form action="index.php" method="post">
				<label>Id</label>
				<input type="text" name="Id" class="form_login" placeholder="Username .." required="required">

				<label>Username</label>
				<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
				<label>Nama</label>
				<input type="text" name="Nama" class="form_login" placeholder="Username .." required="required">

				<label>Password</label>
				<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

				<input type="submit" name="submit" class="tombol_login" value="LOGIN">

				<br />
				<br />
				<center>
					<a href="lojin.php">kembali</a>
				</center>
			</form>

		</div>


</body>

</html>