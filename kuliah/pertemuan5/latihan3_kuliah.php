<?php
// studi kasus

$mahasiswa = [["Dea", "213040070", "dblyaaaa@gmail.com", "Teknik Informatika"],
["Mutia", "213040079", "mutiara@gmail.com", "Teknik informatika"],
["Wina", "213040093", "wina@gmail.com", "Teknik informatika"]];



?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0] ?></li>
    <li>NPM : <?php echo $mhs[1] ?></li>
    <li>Email : <?php echo $mhs[2] ?></li>
    <li>Jurusan : <?php echo $mhs[3] ?></li>
</ul>

<?php } ?>