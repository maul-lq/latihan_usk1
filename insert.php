<?php

require_once 'connecction.php';

$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$tingkat = $_POST['tingkat'];
$jurusan = $_POST['jurusan'];
$wali = $_POST['wali'];
$alamat = $_POST['alamat'];
$nosiswa = $_POST['nosiswa'];
$email = $_POST['email'];
$namaortu = $_POST['namaortu'];
$noortu = $_POST['noortu'];
$pekerjaanortu = $_POST['pekerjaanortu'];

$sql = "INSERT INTO `tabel_siswa` (`NISN`, `Nama Siswa`, `Tingkatan`, `Konsentrasi Keahlian`, `Wali Kelas`, `Alamat Siswa`, `No. Telp Siswa`, `Email`, `Nama Orangtua`, `No. Telp Orangtua`, `Pekerjaan Orangtua`)
VALUES ('$nisn', '$nama',  '$tingkat', '$jurusan', '$wali', '$alamat', '$nosiswa', '$email', '$namaortu', '$noortu', '$pekerjaanortu')";
echo $sql;
$conn->query($sql);

if ($conn->affected_rows > 0) {
    echo "<script>alert('Data berhasil');</script>";
    echo "<meta http-equiv='refresh' content='0; url=http://127.0.0.1/php/latihan_usk1/'>";
} else {
    echo "<script>alert('Data gagal');</script>";
    echo "<meta http-equiv='refresh' content='0; url=http://127.0.0.1/php/latihan_usk1/'>";
}
