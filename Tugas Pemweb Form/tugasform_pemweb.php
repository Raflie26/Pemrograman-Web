<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="tampilan.css">

    <title>Tugas Form</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
      </div>
    </nav>

    <div class="container">
      <h4 class="text-center mt-4 bg-dark text-light" style="padding: 20px; border-radius: 8px;">Pendaftaran Mahasiswa Baru</h4>
    </div>
    
    <div class="container my-4" style="background-color: #fff;">
      <form action="konfirmasipmb.php" method="post">
      <div class="row justify-content-center">
        <div class="col-md-5 my-3">
          <label for="">Jalur Penerimaan Mahasiswa Baru</label>
          <select name="jalur" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="TA 2022/2023 Rata-rata raport">TA 2022/2023 Rata-rata raport</option>
            <option value="TA 2022/2023 Rata-rata raport">TA 2022/2023 Peringkat kelas</option>
            <option value="TA 2022/2023 Rata-rata raport">TA 2022/2023 USM</option>
            <option value="TA 2022/2023 Rata-rata raport">TA 2022/2023 USM</option>
            <option value="TA 2022/2023 Rata-rata raport">TA 2022/2023 USM</option>
          </select>
        </div>
        <div class="col-md-5 my-3">
          <label for="">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama">
        </div>
        <div class="col-md-5 my-3">
          <label for="">Tempat dan Tanggal Lahir</label>
          <input type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir">
        </div>
        <div class="col-md-5 my-3">
          <label for="">Nomor Induk Kependudukan</label>
          <input type="text" class="form-control" name="nik" placeholder="NIK">
        </div>
        <div class="col-10 my-3">
          <label for="">Jenis Kelamin</label>
          <select name="jeniskelamin" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
          </select>
        </div>
        <div class="col-10 my-3">
          <label for="">Agama</label>
          <select name="agama" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="Islam">Islam</option>
            <option value="Katolik">Katolik</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </div>
        <div class="col-10 my-3">
          <label for="">Status</label>
          <select name="status" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="menikah">Menikah</option>
            <option value="belum menikah">Belum Menikah</option>
            <option value="duda">Duda</option>
            <option value="janda">Janda</option>
          </select>
        </div>
        <div class="col-10 my-3">
          <label for="">Alamat</label>
          <textarea name="alamat" class="form-control" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="col-md-5 my-3">
          <label for="">Kode Pos</label>
          <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos">
        </div>
        <div class="col-md-5 my-3">
          <label for="">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <h4 class="text-center mt-4">Data Orang Tua Mahasiswa</h4>
        <div class="col-md-5 my-3">
          <label for="">Nama Ayah</label>
          <input type="text" class="form-control" name="namaayah" placeholder="Nama Ayah">
        </div>
        <div class="col-md-5 my-3">
          <label for="">Nama Ibu</label>
          <input type="text" class="form-control" name="namaibu" placeholder="Nama Ibu">
        </div>
        <div class="col-10 my-3">
          <label for="">Alamat</label>
          <textarea name="alamat2" class="form-control" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="col-md-5 my-3">
          <label for="">Kode Pos</label>
          <input type="text" class="form-control" name="kodepos2" placeholder="Kode Pos">
        </div>
        <div class="col-md-5 my-3">
          <label for="">Email</label>
          <input type="email" class="form-control" name="email2" placeholder="Email">
        </div>
        <div class="col-10 my-3">
          <label for="">Pendidikan Terakhir Ayah</label>
          <select name="pendidikan1" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D1/D2">D1/D2</option>
            <option value="D3/S1">D3/S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
          </select>
        </div>
        <div class="col-10 my-3">
          <label for="">Pendidikan Terakhir Ibu</label>
          <select name="pendidikan1" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D1/D2">D1/D2</option>
            <option value="D3/S1">D3/S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
          </select>
        </div>
        <div class="col-md-5 my-3">
          <label for="">Status Ayah</label>
          <select name="statusayah" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="menikah">Menikah</option>
            <option value="belum menikah">Belum Menikah</option>
            <option value="duda">Duda</option>
            <option value="janda">Janda</option>
          </select>
        </div>
        <div class="col-md-5 my-3">
          <label for="">Status Ibu</label>
          <select name="statusibu" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="menikah">Menikah</option>
            <option value="belum menikah">Belum Menikah</option>
            <option value="duda">Duda</option>
            <option value="janda">Janda</option>
          </select>
        </div>
        <div class="col-md-5 my-3">
          <label for="">Pekerjaan Ayah</label>
          <input type="text" class="form-control" name="pekerjaanayah" placeholder="Pekerjaan Ayah">
        </div>
        <div class="col-md-5 my-3">
          <label for="">Pekerjaan Ibu</label>
          <input type="text" class="form-control" name="pekerjaanibu" placeholder="Pekerjaan Ibu">
        </div>
        <h4 class="text-center mt-4">Program Studi Mahasiswa</h4>
        <div class="col-10 my-3">
          <label for="">Program Studi 1</label>
          <select name="programstudi1" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Desain Komunikasi dan Visual">Desain Komunikasi dan Visual</option>
            <option value="Desain Produk">Desain Produk</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
          </select>
        </div>
        <div class="col-10 my-3">
          <label for="">Program Studi 2</label>
          <select name="programstudi2" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Desain Komunikasi dan Visual">Desain Komunikasi dan Visual</option>
            <option value="Desain Produk">Desain Produk</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
          </select>
        </div>
        <div class="col-10 my-3">
          <label for="">Dari sumber manakah kalian mendapat info mengenai UPJ?</label>
          <select name="sumber" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="Internet">Internet</option>
            <option value="Majalah">Majalah</option>
            <option value="Brosur">Brosur</option>
            <option value="Radio">Radio</option>
            <option value="Spanduk">Spanduk</option>
            <option value="Keluarga">Keluarga</option>
            <option value="Teman">Teman</option>
            <option value="Pameran">Pameran</option>
            <option value="Pihak Sekolah">Pihak Sekolah</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <h4 class="text-center mt-4">Ujian Saringan Masuk ( USM )</h4>
        <div class="col-10 my-3">
          <label for="">Pilihan Gelombang</label>
          <select name="gelombang" id="" class="form-select">
            <option selected>Pilih</option>
            <option value="1">Gelombang 1</option>
            <option value="2">Gelombang 2</option>
            <option value="3">Gelombang 3</option>
            <option value="4">Gelombang 4</option>
          </select>
        </div>
        <div class="col-12 tombol">
          <input class="btn btn-dark" type="submit" value="Submit" name="tombol">
        </div>
      </div>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
