<?php
class mahasiswa
{
    public $nim;
    public $nama;
    public $jurusan;

    function __construct($nim, $nama, $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }
    function tampil_data()
    {
        echo $this->nim;
        echo $this->nama;
        echo $this->jurusan;
    }
}

$siswa = new mahasiswa("8012", "fiqri", "PPLG");
$siswa->tampil_data();