<?php
include('connecction.php');
$query = mysqli_query($conn, "SELECT * FROM tabel");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta name="description" content="" />
    <title>Card Name</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-800">
    <div class="judul w-full h-12 bg-gray-300 text-black text-2x2 font-bold flex justify-center items-center">
        <h1>Tampilan Kartu Pengenal Siswa</h1>
    </div>
    <div>
        <a href="add.php" class="w-fit px-4 py-2 bg-blue-950 text-white text-xl font-semibold rounded-md">TAMBAH</a>
    </div>
    <div class="list-card mt-2 mx-6 flex flex-row flex-wrap item-strect 
    justify-center items-center  gap-4 p-4 ">
        <?php foreach ($results as $hasil) : ?>
            <div class="card-name bg-slate-100 rounded-xl p-0 dark:bg-slate-700 flex flex-row">
                <img src="./images/default-profile-picture.jpg" alt="" class="w-40 h-auto mx-auto rounded-xl">
                <div class="p-8 text-left space-y-4">
                    <table class="table">
                        <tr>
                            <td colspan="2">
                                <a href="delete.php?id=<?= $hasil['Nomor'] ?>" class="w-fit px-4 py-2 bg-blue-950 text-white text-xl font-semibold rounded-md">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">Nama Siswa</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["Nama Siswa"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">NISN</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["NISN"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">Tingkatan</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["Tingkatan"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">Jurusan</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["Konsentrasi Keahlian"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">Wali Kelas</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["Wali Kelas"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">Email</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["Email"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">Nama ortu</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["Nama Orangtua"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">telp ortu</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["No. Telp Orangtua"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-bold text-base">kerjaan ortu</td>
                            <td class="font-semibold text-base">: <?php echo $hasil["Pekerjaan Orangtua"] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php endforeach ?>

    </div>

</body>

</html>