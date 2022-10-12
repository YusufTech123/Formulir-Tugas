<?php

require 'functions.php';

if ( !isset($_GET["id"]) ) {

    header("Location: yangsudah.php");
    exit;

}

$id = $_GET["id"];


$anggota = query("SELECT * FROM anggota WHERE id = $id")[0];


if ( isset($_POST["submit"]) ) {

    if ( edit($_POST) > 0 ) {
        echo "<script> alert('data berhasil diubah!'); document.location.href = 'yangsudah.php';</script>";
    } else {
        echo "<script> alert('data gagal diubah!'); document.location.href = 'edit.php';</script>";
    }
   
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>ubah Data Anggota</title>
</head>
<body>
    <h1>ubah Data Anggota</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $anggota["id"] ?>" >
        <ul>
            <p><input type="text" name="nama"  value="<?= $anggota["nama"] ?>" /></p>
            <p><input type="text" name="kelas"  value="<?= $anggota["kelas"] ?>" /></p>
            <p><input type="text" name="link"  value="<?= $anggota["link"] ?>" /></p>
            <p><button type="submit" name="submit">Ubah Data</button></p>
        </ul>

    </form>


</body>
</html>