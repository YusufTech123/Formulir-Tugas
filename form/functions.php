<?php

$db_anggota = mysqli_connect("sql211.epizy.com", "epiz_32272549", "qLnzit6CBaa", "epiz_32272549_form");

function query($query) {
    global $db_anggota;
    $result = mysqli_query($db_anggota, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $db_anggota;
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $link = htmlspecialchars($data["link"]);

    // query insert data
    $query = "INSERT INTO anggota VALUES(' ', '$nama', '$kelas', '$link')";
    mysqli_query($db_anggota, $query);

    return mysqli_affected_rows($db_anggota);

}

function hapus($id) {
    global $db_anggota;
    mysqli_query($db_anggota, "DELETE FROM anggota WHERE id = $id");
    return mysqli_affected_rows($db_anggota);
} 


function edit($data) {

    global $db_anggota;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $link = htmlspecialchars($data["link"]);

    // query insert data
    $query = "UPDATE anggota SET nama = '$nama', kelas = '$kelas', link = '$link' WHERE id = $id";
    mysqli_query($db_anggota, $query);

    return mysqli_affected_rows($db_anggota);

}

function cari($keyword) {
    $query = "SELECT * FROM anggota WHERE nama LIKE '%$keyword%' OR kelas LIKE '%$keyword%' OR link LIKE '%$keyword%'";

    return query($query);
}

function pesan($data) {

    global $db_anggota;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $pesan = htmlspecialchars($data["pesan"]);

    $query = "INSERT INTO kontak VALUES(' ', '$nama', '$kelas', '$pesan')";

    mysqli_query($db_anggota, $query);

    return mysqli_affected_rows($db_anggota);

}


?>



