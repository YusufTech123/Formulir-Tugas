<?php

    require 'functions.php';

    if ( !isset($_POST["sub"]) ) {
        header("Location: login.php");
        exit;
    } 

        if ( $_POST["username"] == "yusufadmin" && $_POST["password"] == "rb750gr3" ) {

            echo "<script src='javascript/admin.js'> console.log(pemberitahuan3); document.location.href='admin.php'; </script>";
    
       } else {
    
            echo "<script> alert('Username Atau Password Salah'); document.location.href='login.php'; </script>";
    
       }

    $anggota = query("SELECT * FROM anggota");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admin.css" />
    <title>Admin - Page</title>
</head>
<body>

    <h1 id="judul1">Tabel Informasi Anggota RTC yang Sudah Mengumpulkan Tugas Website</h1>
        <div class="table">
            <table border="1" cellpadding="10" cellspacing="1" width="1000px">
                <tr>
                <th>No.</th>
                <th>Hapus Anggota</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Link</th>
                </tr>
            <?php $i = 1; ?>
            <?php foreach( $anggota as $row ) : ?>

            <tr>
                <td align="center"><?php echo $i; ?></td>
                <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin ingin menghapus data?');"><button id="hapus">Hapus</button></td>
                <td align="center"><?php echo $row["nama"]; ?></td>
                <td align="center"><?php echo $row["kelas"]; ?></td>
                <td align="center"><?php echo $row["link"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>