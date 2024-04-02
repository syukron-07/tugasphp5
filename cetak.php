<?php
require_once 'mhsiswa.php';

// Mengambil data dari query string
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$matkul = $_POST['mk'];
$nilai = $_POST['nilai'];

// objek
$mhs = new mhsiswa($nim, $nama, $kuliah, $matkul);
$mhs->setNilai($nilai);

// Cetak tabel
echo '
    <h1 align=center>DAFTAR NILAI MAHASISWA</h1>
    <table border="3" align="center" cellpadding ="10" style="background-color:chartreuse;" width="80%"> 
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Universitas</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>' . $mhs->nim . '</td>
            <td>' . $mhs->nama . '</td>
            <td>' . $mhs->kuliah . '</td>
            <td>' . $mhs->matkul. '</td>
            <td>' . $mhs->nilai . '</td>
            <td>' . $mhs->grade . '</td>
            <td>' . $mhs->predikat . '</td>
            <td>' . $mhs->status . '</td>
        </tr>
    </table>';
?>

   <div align="center" style="margin-top: 20px; color:chartreuse; ">
   <button> <a style="color: black;" href="objmahasiswa.php" class="btn btn-ternary">Kembali</a></button>
</div>
 
     