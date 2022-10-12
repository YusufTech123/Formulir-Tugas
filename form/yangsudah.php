<?php

    require 'functions.php';

    $anggota = query("SELECT * FROM anggota");

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/daftar.css?<?php echo time(); ?>" />
    <title>yang sudah mengumpulkan</title>
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
    <div class="bagian1">
        <marquee><h3 id="runningText">Daftar Nama Anggota RTC Divisi Pemrograman Yang Sudah Mengumpulkan Link Website, Terima Kasih Yang Sudah Mengumpulkan.</h3></marquee>
        <div class="table">
            <table border="1" cellpadding="10" style="background-color: rgb(20, 111, 163); color: #fff; border-color: rgb(55, 124, 163);" width="99%" cellspacing="2">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Link</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach( $anggota as $row ) : ?>
            <tr>
                <td align="center"><?php echo $i; ?></td>
                <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"><button id="first-button">Edit Data</button></td>
                <td align="center"><?php echo $row["nama"]; ?></td>
                <td align="center"><?php echo $row["kelas"]; ?></td>
                <td align="center"><?php echo $row["link"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    </div>
    <div class="bagianSidebar">
        <img id="foto1" src="CSS/image/FOTOKU.jpg" />
        <p><h3 id="nama1">M Yusuf Ghazali</h3></p>
        <p><h5 id="nama1">Web Developer | Network Engineer</h5></p>
        <table cellpadding="10">
            <tr>
                <td><img id="phone" src="logo/phone.png"></td>
                <td id="pertama">021-7781-4779</td>
            </tr>
            <tr>
                <td><img id="graduation" src="logo/graduation.png"></td>
                <td id="kedua">SMK Nasional Depok</td>
            </tr>
            <tr>
                <td><img id="envelope" src="logo/envelope.png"></td>
                <td id="ketiga">yusufghazali.yg@gmail.com</td>
            </tr>
       </table>
       <p><h3 id="member">RTC MEMBER</h3></p>
       <p><img id="contact-title-5" src="CSS/image/PICTURE1.JPG"></p>
        <p><img id="contact-title-6" src="CSS/image/PICTURE2.JPG"></p>
    </div>
    <div class="footer">
        <div class="contact">
            <h2 id="contact-title">Contact Me :</h2>
            <p id="contact-title-2">Phone : 021-7781-4779</p>
            <p id="contact-title-3">Email : yusufghazali.yg@gmail.com</p>
            <p id="contact-title-4"><a href="kontak.php" target="_blank"><button id="button-contact">More Details</button></a></p>
        </div>
    </div>
</body>
</html>