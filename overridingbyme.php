<?php 

// Studi Kasus
// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam

    class produk{
        public $judul,
                $pengarang,
                $penerbit,
                $harga;

        public function __construct($judul, $pengarang, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->pengarang = $pengarang;
            $this->penerbit = $penerbit;
            $this->harga = $harga;  
        }

        public function getLabel(){
            return "{$this->pengarang}, {$this->penerbit}";
        }
    }

    class komik extends produk{
        public $jmlHalaman;

        public function __construct($judul, $pengarang, $penerbit, $harga, $jmlHalaman)
        {
            parent::__construct($judul, $pengarang, $penerbit, $harga);
            // $this->judul = $judul;
            // $this->pengarang = $pengarang;
            // $this->penerbit = $penerbit;
            // $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
        }
        
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
        
        public function getInfoLengkap(){
            $str = "Komik : {$this->judul} | {$this->pengarang}, {$this->penerbit} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
            return $str;
        }
    } 

    class game extends produk{
        public $waktuMain;

        public function __construct($judul, $pengarang, $penerbit, $harga, $waktuMain)
        {
            parent::__construct($judul, $pengarang, $penerbit, $harga);
            // $this->judul = $judul;
            // $this->pengarang = $pengarang;
            // $this->penerbit = $penerbit;
            // $this->harga = $harga;
            $this->$waktuMain = $waktuMain;
        }
        
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
        
        public function getInfoLengkap(){
            $str = "Game : {$this->judul} | {$this->pengarang}, {$this->penerbit} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam";
            return $str;
        }
    } 

    $produk1 = new komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000, 100);
    echo $produk1->getInfoLengkap();

    echo "<br>";

    $produk2 = new game("RDR2", "nda tau", "Rockstars", 700000, 258);
    echo $produk2->getInfoLengkap();