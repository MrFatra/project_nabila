<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kobong = $_POST['kobong'];
    $alamat = $_POST['alamat'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $jumlah_pembayaran = $_POST['jumlah_pembayaran'];

    // menginput data ke database
    $res = mysqli_query($koneksi, "insert into bayar_spp values('','$nama','$kobong','$alamat','$tanggal_pembayaran','$jumlah_pembayaran')");

    if ($res) {
        // mengalihkan halaman kembali ke index.php
        header("location:index.php");
    } else {
        // error 
        echo 'error';
    }
}
