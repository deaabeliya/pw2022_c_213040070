<?php
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
    "gambar" => "img/4'.jfif",
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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
  <div class="container">
      <h1>Daftar Mahasiswa</h1>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach($mahasiswa as $mhs) { ?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td><img src="<?php echo $mhs["gambar"] ?>" alt="" width="50" class="rounded-circle"></td>
      <td><?php echo $mhs["nama"] ?></td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
          <a href="kuliah_latihan4.php?gambar=<?= $mhs["gambar"];?>&nama=<?= $mhs["nama"];?>&email=<?= $mhs["email"];?>&npm=<?= $mhs["npm"];?>&jurusan=<?= $mhs["jurusan"];?>" class="btn badge bg-info">detail</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>