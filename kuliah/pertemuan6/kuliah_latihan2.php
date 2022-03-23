<?php 
// array sociative
// array yang indexnya string

$mahasiswa = [
    ["nama"=>"muhammad farras khair", 
    "npm"=>"213040105", 
    "email"=>"farrraskhair@gmail.com", 
    "jurusan"=>"teknik informatika" ],

    ["nama"=>"asep k", 
    "npm"=>"213040055", 
    "email"=>"acpr@gmail.com", 
    "jurusan"=>"teknik informatika" ],
   

   ["nama"=>"arul", 
    "npm"=>"213040100", 
    "email"=>"karun@gmail.com", 
    "jurusan"=>"teknik informatika" ],
];

 ?>


// var_dump($mahasiswa[1] "nilai_tugas"[1]);

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>nama: <?php echo $mhs["nama"]; ?></li>
        <li>NPM: <?php echo $mhs["npm"] ?></li>
        <li>email: <?php echo $mhs["email"] ?></li>
        <li>jurusan: <?php echo $mhs["jurusan"] ?></li>
    </ul>
    <?php } ?>


    <hr>
<?php foreach($mahasiswa as $mhs) { ?>
<ul>
<?php foreach($mhs as $key =>$value ) {
    <li><?php echo  ?></li>?>
</ul>