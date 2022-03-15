<?php
// pertemuan5
// array adalah variabel yangbsa menampung/ menyimpan banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";

$bulan1="januari";
$bulan2="februari";

echo "<br>";

// membuat array

 $hari = ["senin", "selasa", "rabu"];  //cara baru
 $bulan = array ("januari", "februari", "maret"); 
 $myArr = [10, "farras", true];

$mahasiswa1 = "farras";

echo "<hr>";

// mencetak array
// mencetak1 elemen di dalam array, menggunakan index
// index dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $myArr [0];
echo "br";

// mencetak menggunakan var_dump()atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";


// mencetak semua isi array menggunakan looping
// for

echo ($hari)[0];
echo "<br>";

for($i = 0; $i < count($hari); $i++){
echo $hari[$i];
echo "<br>";
}
echo"<hr>";

// foreach
foreach($bulan as $b){
    echo $b ;
    echo "<br>";

}
echo"<hr>";
// ->arrow
// =>fat arrow
foreach($bulan as $key => $value ) {
    echo "key: $key - value: $value";
    echo "<br>";
}
echo"<hr>";
// memanipulasi array 
// menambah elemen baru di akhir array

$hari[]= "kamis";
$hari[]= "jum'at";
print_r($hari);
?>