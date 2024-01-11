<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peserta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-blue-500 mx-auto w-fit mt-10 px-5 py-8">
        <form action="insert.php" method="post">
            <label class="text-xl font-bold text-white" for="namaField">Nama</label><br>
            <input type="text" name="nama" id="namaField" class="text-xl" required placeholder="Nama Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="nisnField">NISN</label><br>
            <input type="text" name="nisn" id="nisnField" class="text-xl" required placeholder="NISN Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">Tingaktan</label><br>
            <input type="number" name="tingkat" id="tingakatanField" class="text-xl" required placeholder="Tingkatan Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">Jurusan</label><br>
            <input type="text" name="jurusan" id="jurusanField" class="text-xl" required placeholder="Jurusan Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">Wali Kelas</label><br>
            <input type="text" name="wali" id="namaField" class="text-xl" required placeholder="Wali Kelas"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">Alamat</label><br>
            <input type="text" name="alamat" id="namaField" class="text-xl" required placeholder="Alamat Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">No. Telp Siswa</label><br>
            <input type="text" name="nosiswa" id="namaField" class="text-xl" required placeholder="Nomor Telpon Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">Email</label><br>
            <input type="text" name="email" id="namaField" class="text-xl" required placeholder="Email Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">Nama Orangtua</label><br>
            <input type="text" name="namaortu" id="namaField" class="text-xl" required placeholder="Nama Orangtua Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">No. Telp Orang Tua</label><br>
            <input type="text" name="noortu" id="namaField" class="text-xl" required placeholder="Nomor Telepon Orangtua Siswa"><br><br>
            <label class="text-xl font-bold text-white" for="namaField">Pekerjaan Orangtua</label><br>
            <input type="text" name="pekerjaanortu" id="namaField" class="text-xl" required placeholder="Pekerjaan Orangtua"><br><br>
            <input type="submit" value="Tambah Siswa" class="hover:bg-blue-700 w-fit px-4 py-2 bg-blue-950 text-white text-xl font-semibold rounded-md">
        </form>
    </div>
</body>

</html>