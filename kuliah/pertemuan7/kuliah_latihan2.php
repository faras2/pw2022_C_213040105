<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>daftar mahasiswa</title>
  </head>
  <body>
    <div class="cotainer">
        <h1>daftar mahasiswa</h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">gambar</th>
            <th scope="col">nama</th>
           
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><img src="" alt="" height="50" class="rounded-circle"></td>
                <td><?= $mhs["nama"]?></td>
                <td>
            
                    <a href="" class="btn badge bg-warning">edit</a>
                    <a href="" class="btn badge bg-danger">delete</a>
                    <a href="" class="btn badge bg-info">detail</a>
                    <a href="kuliah_latihan3.php?" <?= "nama" $mhs["nama"]; class = "btn badge bg-info"?>detail</a> 

                </td>
            </tr>
        </tbody>
    </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- alt+shift+pgdn -->

<?php 
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
]; ?>