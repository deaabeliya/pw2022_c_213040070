<?php 
 // pertemuan 2, membahas mengenai sintaks PHP
 // Nilai: integer, string, boolean
 echo 10;
 echo "<hr>";

 // VARIABEL
 // wadah untuk menyimpan NILAI
 // Nama nya bebas, tidak boleh diawali angka
 // Tidak boleh ada spasi
 $nama = 'Dea';
 echo $nama;
 echo "<br>";
 // Bisa ditimpa / overwrite
 $nama = 'Abeliya';
 echo $nama;
 echo "<hr>";

 // String
 // '', ""
 echo "jum'at";
 echo "<br>";
 // escaped character
 // \
 echo 'Dea : "jum\'at"';
 echo "<hr>";
 echo "dea : \"jum'at\"";
 echo "<br>";

//interpolasi
//Mencetak isi variabel
//hanya bisa digunakan oleh ""
 echo "Halo nama saya $nama";
 echo "<br>";
 $price = 200;
 echo "price :$$price";

 // OPERATOR
 // Aritmatika
 // +, -, *, /, %
 echo (1 + 2) * 3 - 4; //KaBaTaKu
 echo "<br>";
 $alas = 10;
 $tinggi = 20;
 $luas_segi_tiga = ($alas * $tinggi) / 2;
 echo $luas_segi_tiga;
 echo "<br>";
 echo 3 % 2;

 echo "<hr>";

 // concat
 // penggabung string
 // .
 $nama_depan = 'dea';
 $nama_belakang = 'abeliya';
 echo $nama_depan . " " . $nama_belakang;
 echo "<hr>";

 // perbandingan
 // <, >, <=, >=, ==, !=
 echo 1 < 5;
 echo "<br>";
 echo 10 == "10";
 echo "<hr>";


// Identitas / strict comparison
// ===, !==
echo 10 ==="10";
echo "<hr>";

 // Increment / Decrement
 // Penambahan / Pengurangan 1
 // ++, --
 $x = 10;
 echo ++$x;
 echo "<br>";
 echo $x++;



?>