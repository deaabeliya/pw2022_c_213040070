<?php
// Array Associative
// Array yang indexnya string


$mahasiswa = [
    [
        "nama" => "Dea Abeliya", 
        "npm" => "213040070", 
        "email" => "dblyaaaa@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Mutiara", 
        "npm" => "213040079", 
        "email" => "mutiara@gmail.com", 
        "jurusan" => "Teknik Pangan"
    ]
    ];

// var_dump($mahasiswa[1]["nilai_tugas"][1])


?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
<li>Nama: <?php echo $mhs["nama"]; ?></li>
<li>NPM: <?php echo $mhs["npm"]; ?></li>
<li>Email: <?php echo $mhs["email"]; ?></li>
<li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>

<?php foreach($mahasiswa as $mhs) {?>
<ul>
    <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>: <?php echo $value; ?></li>
    <?php } ?>
</ul>
<?php } ?>