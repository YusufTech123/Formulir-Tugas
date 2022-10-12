<?php

    require 'functions.php';

    if ( isset($_POST["submit"]) ) {

        if ( pesan($_POST) > 0 ) {

        echo "<script> alert('Pesan Anda Berhasil Terkirim!'); document.location.href='kontak.php'; </script>";

        } else {

        echo "<script> alert('Pesan Anda Gagal Terkirim!'); document.location.href='kontak.php'; </script>";

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/kontak.css" />
    <title>Kontak</title>
</head>
<body>
<div class="header">
        <img id="gambar1" src="CSS/image/RTC.png" />
        <ul>
            <li><a id="list1" href="kontak.php">Kontak</a></li>
            <li><a id="list2" href="index.php">Formulir</a></li>
            <li><a id="list3" href="yangsudah.php">Beranda</a></li>
        </ul>
    </div>
    <div class="main">
        <form action="" method="post">
            <p><label id="nama" for="namaLengkap">Nama :</label></p>
            <p><input type="text" name="nama" id="namaLengkap" placeholder="Nama Anda" required></p>
            <p><label id="kelas" for="kelasSiswa">Kelas :</label></p>
            <p><input type="text" name="kelas" id="kelasSiswa" placeholder="Kelas" required></p>
            <p><label id="pesan" for="pesanUser">Pesan :</label></p>
            <p><textarea id="pesanUser" name="pesan" placeholder="Isi pesan Anda" required></textarea></p>
            <p><button id="button" type="submit" name="submit" id="sub">Kirim Pesan</button></p>
        </form>
    </div>
</body>
</html>