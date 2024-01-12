<?php

require_once 'connecction.php';

$id = $_GET['id'];
$sql = "DELETE FROM `tabel_siswa` WHERE `Nomor`='$id';";
$conn->query($sql);

if ($conn->affected_rows > 0) {
    echo "<script>alert('Data berhasil');</script>";
    echo "<meta http-equiv='refresh' content='0; url=http://127.0.0.1/php/latihan_usk1/'>";
} else {
    echo "<script>alert('Data gagal');</script>";
    echo "<meta http-equiv='refresh' content='0; url=http://127.0.0.1/php/latihan_usk1/'>";
}
