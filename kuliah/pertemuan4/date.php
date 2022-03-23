<?php
// function

// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-y");
// "l" untuk menampilkan hari
// "d" untuk menampilkan tanggal
// "M" untuk menampilkan bulan
// "m" untuk menampilkan angka bulan


// referensi nya dari php.net


// time
// unix timestamp / epoch time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("d M Y",time()+60*60*24*100);

// mktime
// membuat sendiri detik 
// mktime(0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal,tahun
// echo date ( "l", mktime(0,0,0,6,4,2003));

// strtotime
echo date("l", strtotime ("4 jun 2003"));









?>