<?php 
// SUPERGLOBALS
// VARIABEL MILIK PHP yang bisa kita gunaan
// bentuknya array assosiative
// $_GET
// $_POST
// $_SERVER
// var_dump($_SERVER ["SERVER_NAME"]);
// var_dump($_GET);
// var_dump($_POST);
// $_GET["nama"] = "farras";
// $_GET["email"] = "farraskhair@gmail.com";
//localhost/pw2022_c_213040105/kuliah/pertemuan7/kuliah_latihan1.php?nama=farras
// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])){
$_nama = $_GET["nama"];
} else {
    $nama= 'tidak diketahui!';
}
?>

<h1>hallo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=bedi">bedi</a>
    </li>
    <li>
        <a href="?nama=farras">farras</a>
    </li>
</ul>