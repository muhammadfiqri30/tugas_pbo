<?php

    class mahasiswa{
        public $nama = "";
        public $email = "";
        public $password = "";
        function __construct($nama, $email, $password){
            $this->nama = $nama;
            $this->email = $email;
            $this->password = $password;
        }
        
        function tampilBiodata(){
            echo $this->nama ."<br />";
            echo $this->email ."<br />";
            echo $this->password ."<br />";

        }
        function validasi(){
            if($this->nama == ""){
                echo "masukkan nama";
                die();
            }
            if($this->email == ""){
                echo "masukkan email";
                die();
            }
            if($this->password == ""){
                echo "masukkan password";
                die();        
            }
    }
 }
    $nama= $_POST['nama'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    
    $mahasiswa = new mahasiswa($nama, $email, $password);
    if($mahasiswa->validasi()){     
    $mahasiswa->tampilBiodata();
    }
?>