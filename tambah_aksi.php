<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$kobong = $_POST['kobong'];
$alamat = $_POST['alamat'];
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$jumlah_pembayaran = $_POST['jumlah_pembayaran'];
 

// menginput data ke database
mysqli_query($koneksi,"insert into bayar_spp values('','$nama','$kobong','$alamat','$tanggal_pembayaran','$jumlah_pembayaran')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>