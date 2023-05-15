<?php
  class mahasiswa{
    public $nim = "8012";
    public $nama = "muhammad fiqri f";
    public $jurusan = "RPL";

    function tampil_data(){
        echo $this->nim;
        echo $this->nama;
        echo $this->jurusan;
    }
  }  
  $mahasiswa = new mahasiswa();
  $mahasiswa->tampil_data();
?>