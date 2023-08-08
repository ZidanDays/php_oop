<?php

use Product as GlobalProduct;

class Product {

    public $judul,
            $pengarang,
            $penerbit,
            $harga;

            
    // fungsi untuk menginisialisasi atau mengisi value dari property
    public function __construct($judul, $pengarang, $penerbit, $harga){
        // echo "Hello World"; 
        
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    // fungsi untuk memanggil fungsi construct di atas
    public function getLabel(){
        return 
        "<br> Pengarang Film : $this->pengarang
        <br> Penerbit Film : $this->penerbit";
    }
}

class cetakInfoProduk{
    public function cetak( Product $produk ){
        $str ="{$produk->judul} | {$produk->getLabel()} <br> Harga = Rp. ({$produk->harga})";
        return $str;
    }
}

// $product1 = new Product;
// $product1->judul = "Shingeki No Kyojin";
// $product1->pengarang = "Hajime Isayama";
// $product1->penerbit = "WIT Studio";
// $product1->harga = 50000;

// echo "Judul Komik : ";
// echo $product1->judul;
// echo '<br>';
// echo "Pengarang : ";
// echo $product1->pengarang;


$produk1 = new Product($judul = "Avenger Infinity War",$pengarang = "Stann Lee", $penerbit = "Marvel Studio", $harga = 50000);
// echo $produk1->getLabel();

echo "<br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);