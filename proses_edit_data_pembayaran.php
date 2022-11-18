<?php

include('koneksi.php');

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kobong = $_POST['kobong'];
    $alamat = $_POST['alamat'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $jumlah_pembayaran = $_POST['jumlah_pembayaran'];
    $id = $_GET['id'];

    $sql = "UPDATE daftar SET nama='$nama',kobong= '$kobong',alamat=$alamat, tanggal_pembayaran=$tanggal_pembayaran, jumlah_pembayaran=$jumlah_pembayaran WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal merubah data";
    }
}
