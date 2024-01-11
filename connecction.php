<?php
$conn = mysqli_connect('localhost', 'root', '', 'data_siswa');
if (!$conn) {
    exit('database tidak terkoneksi');
}
