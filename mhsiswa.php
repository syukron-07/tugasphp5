<?php

class mhsiswa{
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $kuliah, $matkul) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul;
    }


    
    public function setNilai($nilai) {
        $this->nilai = $nilai;
        $this->setGrade();
        $this->setPredikat();
        $this->setStatus();
    }

    
    private function setGrade() {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } else {
            $this->grade = 'D';
        }
    }

    
    private function setPredikat() {
        if ($this->nilai >= 85) {
            $this->predikat = 'Sangat Memuaskan';
        } elseif ($this->nilai >= 70) {
            $this->predikat = 'Memuaskan';
        } elseif ($this->nilai >= 60) {
            $this->predikat = 'Cukup';
        } else {
            $this->predikat = 'Kurang';
        }
    }

   
    private function setStatus() {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}
?>