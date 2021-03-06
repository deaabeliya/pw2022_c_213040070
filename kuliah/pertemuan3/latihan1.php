<?php
// Pengulangan
// For
// while
// do.. while
// foreach : pengulangan khusus array

// pengulangan for
for ($i = 0; $i < 3; $i++ ) {
    echo "Hello world! <br>";
}
echo "<hr>";

// Pengulangan while
$i = 0;
while($i < 3) {
    echo "Hello world! <br>";
    $i++;
}
echo "<hr>";

// Pengulangan do.. while
$i = 0;
do {
    echo "Hello world! <br>";
    $i++;
} while($i < 3);
echo "<hr>";
?>

<!-- Membuat table dengan pengulangan PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

    <!-- Cara Pertama -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for($i = 1; $i <= 3; $i++) {
                echo "<tr>";
                for($j = 1; $j <= 5; $j++) {
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
           <?php echo "<hr>" ?>
</body>

    <!-- Cara Kedua -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>    
    </table>
           <?php echo "<hr>" ?>

    <!-- Membuat table menggunakan sintaks templatin dan memberi warna pada bilangan ganjil -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 == 1) : ?>
            <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>                
    </table>

</body>
</html>