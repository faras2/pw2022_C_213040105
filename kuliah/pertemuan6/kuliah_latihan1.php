<?php
// array numerik
// array yang indexnya ber asosiasi/ berpasangan dengan angka

$mahasiswa = [
    ["muhammad farras khair", "213040105", "farrraskhair@gmail.com", "teknik informatika" ],

   
];

// var_dump($mahasiswa[1][3]);


?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>nama: <?php echo $mhs[0]; ?></li>
    <li>NPM: <?php echo $mhs[1] ?></li>
    <li>email: <?php echo $mhs[2] ?></li>
    <li>jurusan: <?php echo $mhs ?></li>
</ul>
<?php } ?>









<!-- "PHP Tag": {
    "prreflix": "php",
     "body": "<?php $1 ?>" -->
} -->
