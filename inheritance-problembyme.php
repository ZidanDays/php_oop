<?php

    class produk{
        public $judul, $pengarang, $penerbit, $harga, $durasi;
        
        public function __construct($judul, $pengarang, $penerbit, $harga, $durasi)
        {
            $this->judul = $judul;
            $this->pengarang = $pengarang;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->durasi = $durasi;
        }
        
        public function getLabelGame(){
            return " Pengarang Game: $this->pengarang, Penerbit Game: $this->penerbit";
        }
        
        public function getLabelKomik(){
            return " Pengarang Komik: $this->pengarang | Penerbit Komik: $this->penerbit";
        }
    }

    class cetakInfoProduk{
        public function cetak(produk $produk){
            $str = "Judul Game: {$produk->judul}<br> {$produk->getLabel()} harga = {$produk->harga}";
            return $str;
        }
    }

    $produk1 = new produk("Resident Evil 4 Remake", "Lujima", "CAPCOM", 700000, "128 jam");
    $produk2 = new produk("One Piece", "Oda", "Shonen Jumo", 100000, "58 Halaman");

    
    echo "Judul Game : {$produk1->judul} | {$produk1->getLabelGame()} (Rp.{$produk1->harga}) ~ {$produk1->durasi} ";
    echo "<br>";
    echo "Judul Komik : {$produk2->judul} | {$produk2->getLabelKomik()} (Rp.{$produk2->harga}) ~ {$produk2->durasi} ";

    echo "<br><br>";