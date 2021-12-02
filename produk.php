<?php 
     
class Produk
{
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	} 

}

// $produk1 = new produk();
// $produk2 = new produk();

$produk3 = new produk();
$produk3->judul="Naruto";
$produk3->penulis="Masashhi Kishimito";
$produk3->penerbit="Shonen Jump";
$produk3->harga=30000;

$produk4 =  new produk();
$produk4->judul="Uncharted";
$produk4->penulis="Neil Druckmann";
$produk4->penerbit="Soni Computer";
$produk4->harga=250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

 ?>