<?php

include('koneksi.php');

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik = $_POST['nik'];
    $nama_orang_tua = $_POST['nama_orang_tua'];
    $kobong = $_POST['kobong'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $id = $_GET['id'];

    $sql = "UPDATE daftar SET nama='$nama',tanggal_lahir= '$tanggal_lahir',nik=$nik, nama_orang_tua=$nama_orang_tua, kobong=$kobong, desa=$desa, kecamatan=$kecamatan WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal merubah data";
    }
}
