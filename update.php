<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$jumlah_pembayaran = $_POST['jumlah_pembayaran'];
 
// update data ke database
mysqli_query($koneksi,"update bayar_spp set nama='$nama', kobong='$kobong', alamat='$alamat', tanggal_pembayaran='$tanggal_pembayaran', jumlah_pembayaran='$jumlah_pembayaran' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>