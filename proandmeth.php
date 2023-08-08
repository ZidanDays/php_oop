<?php 

// class mobil{
//     public nama;
//     public merk;
//     public warna;
//     public kecepatanMaksimal;

//     public function tambahKecepatan{
        
//     }

//     public function kurangiKecepatan{
        
//     }

//     public function gantiTransmisi{
        
//     }
// }


//#CARA PERTAMA 

class produk{
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    public $harga = 0;

    //pake method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getLabelGame(){
        return
        "<br><br> Judul Game : $this->judul <br>
        Judul Penulis : $this->penulis <br>
        Judul Penerbit : $this->penerbit <br>
        Judul harga : $this->harga";
    }
}


//buat instansiasi produk manga naruto
$produk1 = new produk();
$produk1->judul = "Naruto";
// var_dump($produk1);

// buat instansiasi produk game
$produk2 = new produk();
$produk2->judul = "Resident Evil 4 Remake";
// var_dump($produk2);

//#CARA KEDUA
$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 700000;

echo "Judul komik : $produk3->judul, penulis komik : $produk3->penulis, Penerbit : $produk3->penerbit, Harga : "; echo $produk3->harga;
echo "<br>";
echo $produk3->getLabel();

echo "<br>";
echo "<br>";
echo "Judul Game : $produk4->judul";echo "<br>";
echo "Judul Penulis : $produk4->penulis";echo "<br>";
echo "Judul Penerbit : $produk4->penerbit";echo "<br>";
echo "Judul harga : $produk4->harga";echo "<br>";echo "<br>";

echo $produk4->getLabel();

echo $produk4->getLabelGame();

?>