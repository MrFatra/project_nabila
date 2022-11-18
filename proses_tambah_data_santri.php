<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik = $_POST['nik'];
    $nama_orang_tua = $_POST['nama_orang_tua'];
    $kobong = $_POST['kobong'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];

    // menginput data ke database
    $res = mysqli_query($koneksi, "INSERT INTO data_santri VALUES('', '$nama', '$tanggal_lahir','$nik','$nama_orang_tua','$kobong','$desa', '$kecamatan')");

    if ($res) {
        // mengalihkan halaman kembali ke index.php
        header("location:index.php");
    } else {
        // error 
        echo 'error';
    }
}
