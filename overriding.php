<?php

    class produk{
        public
            $judul,
            $pengarang,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;
        
        public function __construct($judul, $pengarang, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->pengarang = $pengarang;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel(){
            return "$this->pengarang, $this->penerbit";
        }
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam  
    }


    class Komik extends produk{

        public function __construct($judul,$pengarang, $penerbit, $harga, $jmlHalaman)
        {
            parent::__construct($judul, $pengarang, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }
        
        public function getInfoLengkap(){
            $str = "Komik : {$this->judul} | ". parent::getLabel() ." (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman";
            return $str;
        }
        
    }
    
    class Game extends produk{

        public function __construct($judul, $pengarang, $penerbit, $harga, $waktuMain)
        {
            parent::__construct($judul, $pengarang, $penerbit, $harga, $waktuMain);
            $this->waktuMain = $waktuMain;
        }
        
        public function getInfoLengkap(){
            $str = "Game : {$this->judul} | ". parent::getLabel() ." (Rp.{$this->harga}) ~ {$this->waktuMain} Jam";
            return $str;
        }
        
    }
    
    class cetakInfoProduk{
        public function cetak(produk $produk){
            $str = "Judul Game: {$produk->judul}<br> {$produk->getLabel()} harga = {$produk->harga}";
            return $str;
        }
    }
    
    $produk1 = new Komik("One Piece", "Oda", "Shonen Jump", 100000, 58);
    $produk2 = new Game("Resident Evil 4 Remake", "Lujima", "CAPCOM", 700000, 128);

    
    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();

    echo "<br><br>";

    // Studi Kasus
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam