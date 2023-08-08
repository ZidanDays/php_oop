<?php

    class produk{
        public $judul, $pengarang, $penerbit, $harga;
        
        public function __construct($judul, $pengarang, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->pengarang = $pengarang;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
        
        public function getLabel(){
            return " Pengarang Game: $this->pengarang
                    <br> Penerbit Game: $this->penerbit <br>";
        }
    }

    class cetakInfoProduk{
        public function cetak(produk $produk){
            $str = "Judul Game: {$produk->judul}<br> {$produk->getLabel()} harga = {$produk->harga}";
            return $str;
        }
    }

    $produk1 = new produk("Resident Evil 4 Remake", "Lujima", "CAPCOM", 700000);
    echo $produk1->getLabel();

    echo "<br><br>";

    $produk2 = new produk("Metal Gear Solid V", "Kyojima", "Hideo Kyojima", 500000);
    // echo $produk2->getLabel();

    $infoProduk1 = new cetakInfoProduk();
    echo $infoProduk1->cetak($produk2);