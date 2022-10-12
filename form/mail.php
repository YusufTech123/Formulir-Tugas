<?php

    require 'functions.php';

    $pesan = query("SELECT * FROM kontak");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail - Kontak</title>
</head>
<body>
    <div class="title">

        <h1>Daftar Pesan Dari User</h1>

    </div>
    <div class="table">
            <table border="1" cellpadding="5" style="background-color: rgb(20, 111, 163); color: #fff; border-color: rgb(55, 124, 163);" width="99%" cellspacing="2">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Pesan</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach( $pesan as $row ) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["kelas"]; ?></td>
                <td><?php echo $row["pesan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>