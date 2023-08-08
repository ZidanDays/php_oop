<?php

    class produk{
        public
            $judul,
            $pengarang,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;
        
        public function __construct($judul, $pengarang, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe)
        {
            $this->judul = $judul;
            $this->pengarang = $pengarang;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }
        
        
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam
        
        public function getInfoLengkap(){
            $str = "{$this->tipe} | {$this->pengarang}, {$this->penerbit} (Rp.{$this->harga})";
            if($this->tipe == "Komik"){
                $str .= " - {$this->jmlHalaman} Halaman";
            }elseif($this->tipe == "Game"){
                $str .= " ~ {$this->waktuMain} Jam";
            }

            return $str;
        }
    }

    class cetakInfoProduk{
        public function cetak(produk $produk){
            $str = "Judul Game: {$produk->judul}<br> {$produk->getLabel()} harga = {$produk->harga}";
            return $str;
        }
    }
    
    $produk1 = new produk("One Piece", "Oda", "Shonen Jump", 100000, 58, 0, "Komik");
    $produk2 = new produk("Resident Evil 4 Remake", "Lujima", "CAPCOM", 700000, 0, 128, "Game");

    
    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();

    echo "<br><br>";

    // Studi Kasus
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp.25000) - 50 Jam