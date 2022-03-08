<?php
// Membuat fungsi / definisi fungsi
function totalLuasDuaKubus($a, $b) {
  $luas_a = $a * $a * $a;
  $luas_b = $b * $b * $b;

  $total = $luas_a + $luas_b;
  
  return "Total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
}

echo totalLuasDuaKubus(7,4);
echo "<br>";
echo totalLuasDuaKubus(17,26);
echo "<br>";
echo totalLuasDuaKubus(365,200);
echo "<br>";

?>