<?php

    class produk{
        private
            $judul,
            $pengarang,
            $penerbit,
            $harga,
            $diskon = 0;
            
        
        public function __construct($judul = "judul", $pengarang = "pengarang", $penerbit = "penerbit", $harga = 0)
        {
            $this->judul = $judul;
            $this->pengarang = $pengarang;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getInfoProduk(){
            return "$this->judul, $this->pengarang, $this->penerbit, (Rp.{$this->harga})";
        }

        public function getJudul(){
            return $this->judul;
        }

        public function setJudul($judul){
            return $this->judul = $judul;
        }

        public function setPengarang($pengarang){
            return $this->pengarang = $pengarang;
        }

        public function getPengarang(){
            return $this->pengarang;
        }

        public function getPenerbit(){
            return $this->penerbit;
        }

        public function setPenerbit($penerbit){
            return $this->penerbit = $penerbit;
        }

        public function setHarga($harga){
            return $this->harga = $harga;
        }
        
        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100 ) ;
        }

        public function getDiskon(){
            return $this->diskon;
        }

        public function setDiskon ( $diskon ){
            $this->diskon = $diskon;
        }
        
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam  
    }


    class Komik extends produk{

        public $jmlHalaman;

        public function __construct($judul,$pengarang, $penerbit, $harga, $jmlHalaman)
        {
            parent::__construct($judul, $pengarang, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }
        
        public function getInfoProduk(){
            $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman";
            return $str;
        }
        
    }
    
    class Game extends produk{
        
        public $waktuMain;
        
        public function __construct($judul = "judul", $pengarang = "pengarang", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
        {
            parent::__construct($judul, $pengarang, $penerbit, $harga, $waktuMain);
            $this->waktuMain = $waktuMain;
        }
        
        public function getInfoProduk(){
            $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";
            return $str;
        }
        
    }
    
    class cetakInfoProduk{
        public function cetak(produk $produk){
            $str = "Judul Game: {$produk->judul}<br> {$produk->getLabel()} harga = {$produk->harga}";
            return $str;
        }
    }
    
    $produk1 = new Komik("One Piece", "Oda Sensei", "Shonen Jump", 100000, 58);
    $produk2 = new Game("Resident Evil 4 Remake", "Lujima", "CAPCOM", 700000, 128);

    
    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

    echo "<br><br>";

    // Studi Kasus
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam

    echo "<hr>";

    // $produk2->harga = 3000;
    $produk2->setDiskon(90);
    echo $produk2->getHarga();