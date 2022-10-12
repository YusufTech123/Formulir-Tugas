<?php

require 'functions.php';

if ( isset($_POST["submit"]) ) {

    if ( tambah($_POST) > 0 ) {
        echo "<script src='javascript/notice.js'> console.log(pemberitahuan1); document.location.href='index.php'; </script>";
        
    } else {
        echo "<script src='javascript/notice_else.js'> console.log(pemberitahuan2); document.location.href='index.php'; </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css" />
    <title>Form Pengumpulan Link Website</title>
</head>
<body>
    <img id="RTC1" src="CSS/image/RTC.png" />  
    <img id="RTC2" src="CSS/image/RTC.png" />
    <div class="form">
        <form action="" method="POST">
           <h2 id="heading2">FORM LINK WEBSITE</h2>
           <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required/><br>
           <input type="text" name="kelas" id="kelas" placeholder="Kelas" required/><br>
           <input type="text" name="link" id="link" placeholder="Link Website" required/><br>
           <button type="submit" name="submit" id="submit">KIRIM FORM</button>
        </form>
        <marquee><h5 id="runningText" style="color: red;">FORMULIR PENGUMPULAN LINK WEBSITE, HARAP ISI FORMULIR DIATAS DENGAN BAIK DAN BENAR, TERIMA KASIH</h5 id="runningText"></marquee>
    </div>
</body>
</html>














