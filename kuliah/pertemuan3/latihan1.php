<?php
// pengulangan
// for
// whille
// do.. whille
// foreach : pengulangan khusus array

// for ( $i = 0; $i < 5 ; $i++ ) {
//     echo "hello world! <br>";
// }

// $i = 0;
// while( $i < 5  )  {
//     echo "hello world! <br>";
// $i++;
// }

// $i = 10;
// do {
//     echo "hello world! <br>";
//     $i++;
// } while ( $i < 5 );

// pengkondisian / percabangan
// if else
// if else if else
// ternary
// switch

// $x = 2;
// if ( $x<20 ) {
//     echo "benar";
// } elseif  ($x == 20 ) {
//     echo"binggo!";
// }
// else {
//     echo "salah";
// }


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table border="1" cellpadding="10" cellspacing=0>
    <?php
    // for( $i = 1 ; $i <= 3; $i++) {
    //     echo "<tr>";
    //     for($j = 1; $j <= 5; $j++  ) {
    //         echo "<td>$i,$j</td>";
    //     }
    //     echo "</tr>";

    for( $i = 1 ; $i <= 3; $i++) : ?>
<tr>
    <?php for($j = 1; $j <= 5; $j++  ) : ?>
        <td><?php echo "$i, $j" ?> </td>
        <?php endfor; ?>
</tr>
    <?php endfor; ?>


</table>


</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing=0>
<?php   for( $i = 1 ; $i <= 5; $i++) : ?>
    <?php if($i % 2; == 1) : ?>
<tr class="warna-baris">
    <?php else : ?>
    <tr>
    <?php endif; ?>
    <?php for($j = 1; $j <= 5; $j++  ) : ?>
        <td> <?= echo "$i, $j" ?> </td>
    <?php endfor; ?>
</tr>
    <?php endfor; ?>

    </table>
</body>
</html> -->