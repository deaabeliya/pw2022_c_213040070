<?php 
// ARRAY Multidimensi
// Array di dalam array

$mahasiswa = [
["Dea Abeliya", "213040070", "dblyaaaa@gmail.com", "Teknik Informatika"], 
["Mutiara Laelani Firdaus", "213040079", [1,[2],3], "mutiara@gmail.com", "Teknik Informatika"]
];

echo $mahasiswa[1][2][1][0]; //2



?>