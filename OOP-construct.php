<?php

class Product {

    public $judul,
            $pengarang,
            $penerbit,
            $harga;

            
    // fungsi untuk menginisialisasi atau mengisi value dari property
    public function __construct($judul , $pengarang, $penerbit, $harga){
        // echo "Hello World"; 
        
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    // fungsi untuk memanggil fungsi construct di atas
    public function getLabel(){
        return 
        "<br> Judul Film : $this->judul
        <br> Pengarang Film : $this->pengarang
        <br> Penerbit Film : $this->penerbit
        <br> Harga Film : $this->harga";
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
echo $produk1->getLabel();