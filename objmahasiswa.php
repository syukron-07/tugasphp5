<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<CENTEr>
<H1>INPUT NILAI MAHASISWA</H1>
<form method="post" action="cetak.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-4">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kuliah" class="col-4 col-form-label">Kuliah</label> 
    <div class="col-4">
      <select id="kuliah" name="kuliah" class="custom-select">
        <option value="kuliah">--Asal Universitas--</option>
        <option value="Universitas Madura">Universitas Madura</option>
        <option value="Universitas NF-Academy">Universitas NF-Academy</option>
        <option value="Universitas Malang">Universitas Malang</option>
        <option value="Universitas Bogor">Universitas Bogor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="mk" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-4">
      <select id="mk" name="mk" class="custom-select">
        <option value="matkul">--Mata Kuliah--</option>
        <option value="LARAVEL">Laravel</option>
        <option value="PHP">PHP</option>
        <option value="UI/UX">UI/UX</option>
        <option value="WEB DESIGN">WEB DESIGN</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-4">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-4">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</CENTEr>




<?php
require_once 'mhsiswa.php';

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matkul = $_POST['mk'];
    $nilai = $_POST['nilai'];

// objek



?>
 