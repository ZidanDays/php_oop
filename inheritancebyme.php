<?php 
// Studi Kasus
// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam



    class produk{
        public $judul, $pengarang, $penerbit, $harga, $jmlHalaman, $waktuMain;

        public function __construct($judul, $pengarang, $penerbit, $harga, $jmlHalaman, $waktuMain)
        {
            $this->judul = $judul;
            $this->pengarang = $pengarang;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
        }
    }

    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
    
    class komik extends produk{
        public function cetak(){
            $str = "Komik : {$this->judul} | {$this->pengarang},{$this->penerbit} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman <br>";
            return $str;
        }
    }


    // Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam
    
    class game extends produk{
        public function cetak(){
            $str = "Game : {$this->judul} | {$this->pengarang}, {$this->penerbit} (Rp.{$this->harga}) ~ {$this->waktuMain} Jam <br>";
            return $str;
        }
    }

    $produk1 = new komik("One Piece","Oda Sensei","TOEI Animation",35000,58,0);
    $produk2 = new game("Red Dead Redemption 2","Stephen Hilenburg","ROCKSTAR",700000,0,200);

    echo $produk1->cetak();
    echo $produk2->cetak();
    