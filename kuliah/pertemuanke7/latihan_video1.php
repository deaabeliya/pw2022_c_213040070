<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "dea", 
    "npm" => "213040070", 
    "email" => "dea@gmail.com", 
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/1.jfif",
    "no" => "1"
    ],
    [
    "nama" => "Mutiara", 
    "npm" => "213040079", 
    "email" => "muti@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/2.jfif",
    "no" => "2"
    ],
    [
    "nama" => "viane", 
    "npm" => "213040020", 
    "email" => "viane@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/3.jfif",
    "no" => "3"
    ],
    [
    "nama" => "nadilla", 
    "npm" => "21304003", 
    "email" => "nadilla@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/4.jfif",
    "no" => "4"
    ],
    [
    "nama" => "sharen", 
    "npm" => "21304003", 
    "email" => "sharen@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/5.png",
    "no" => "5"
    ],
    [
    "nama" => "wina", 
    "npm" => "21304003", 
    "email" => "wina@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/6.jpg",
    "no" => "6"
    ],
    [
    "nama" => "deby", 
    "npm" => "21304003", 
    "email" => "deby@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/7.jpg",
    "no" => "7"
    ],
    [
    "nama" => "riyan", 
    "npm" => "21304003", 
    "email" => "riyan@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/8.jpg",
    "no" => "8"
    ],
    [
    "nama" => "nabilla", 
    "npm" => "21304003", 
    "email" => "nabilla@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/9.jfif",
    "no" => "9"
    ],
    [
    "nama" => "fathia", 
    "npm" => "21304003", 
    "email" => "fathia@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/10.jpg",
    "no" => "10"
    ]];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2_video.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?></a><?= $mhs["nama"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>