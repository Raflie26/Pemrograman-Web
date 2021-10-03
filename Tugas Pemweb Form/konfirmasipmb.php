<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="tampilan.css">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php 
    if (isset($_POST['tombol'])) {
      $jalur = $_POST["jalur"];
      $nama = $_POST['nama'];
      $ttl = $_POST['ttl'];
      $nik = $_POST['nik'];
      $jeniskelamin = $_POST['jeniskelamin'];
      $agama = $_POST['agama'];
      $status = $_POST['status'];
      $alamat = $_POST['alamat'];
      $kodepos = $_POST['kodepos'];
      $email = $_POST['email'];
      $nama_ayah = $_POST['namaayah'];
      $nama_ibu = $_POST['namaibu'];
      $alamat2 = $_POST['alamat2'];
      $kodepos2 = $_POST['kodepos2'];
      $email2 = $_POST['email2'];
      $pendidikanayah = $_POST['pendidikanayah'];
      $pendidikanibu = $_POST['pendidikanibu'];
      $statusayah = $_POST['statusayah'];
      $statusibu = $_POST['statusibu'];
      $pekerjaanayah = $_POST['pekerjaanayah'];
      $pekerjaanibu = $_POST['pekerjaanibu'];
      $programstudi1 = $_POST['programstudi1'];
      $programstudi2 = $_POST['programstudi2'];
      $sumber = $_POST['sumber'];
      $gelombang = $_POST['gelombang'];
      
      echo"<div class='output'>";
      echo "<br><h2 class='text-center'>Output Pendaftaran : </h2>";
      echo "<p class='output2'>Jalur Penerimaan :".$jalur."</p>";
      echo "<p class='output2'>Nama Lengkap :".$nama."</p>";
      echo "<p class='output2'>Tempat Tanggal Lahir  :".$ttl."</p>";
      echo "<p class='output2'>Nomor Induk Kependudukan  :".$nik."</p>";
      echo "<p class='output2'>Jenis Kelamin :".$jeniskelamin."</p>";
      echo "<p class='output2'>Agama :".$agama."</p>";
      echo "<p class='output2'>Status  :".$status."</p>";
      echo "<p class='output2'>Alamat :".$alamat."</p>";
      echo "<p class='output2'>Kode Pos :".$kodepos."</p>";
      echo "<p class='output2'>Email :".$email."</p>";
      echo "<p class='output2'>Nama Ayah :".$nama_ayah."</p>";
      echo "<p class='output2'>Nama Ibu :".$nama_ibu."</p>";
      echo "<p class='output2'>Alamat Orang Tua :".$alamat2."</p>";
      echo "<p class='output2'>Kode Pos :".$kodepos2."</p>";
      echo "<p class='output2'>Email Orang Tua:".$email2."</p>";
      echo "<p class='output2'>Pendidikan Ayah :".$pendidikanayah."</p>";
      echo "<p class='output2'>Pendidikan Ibu :".$pendidikanibu."</p>";
      echo "<p class='output2'>Status Ayah :".$statusayah."</p>";
      echo "<p class='output2'>Status Ibu :".$statusibu."</p>";
      echo "<p class='output2'>Pekerjaan Ayah :".$pekerjaanayah."</p>";
      echo "<p class='output2'>Pekerjaan Ibu :".$pekerjaanibu."</p>";
      echo "<p class='output2'>Program studi 1 :".$programstudi1."</p>";
      echo "<p class='output2'>Program studi 2 :".$programstudi2."</p>";
      echo "<p class='output2'>Sumber :".$sumber."</p>";
      echo "<p class='output2'>Gelombang :".$gelombang."</p>";
      echo "</div>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
