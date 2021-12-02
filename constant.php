<?php 

// define('NAMA', 'NISA AGUSTINA M');
// echo NAMA;

// echo "<br>";

// const UMUR=17; bisa disimpan didalam class
// echo UMUR;

// class Coba{
// 	const NAMA = 'Nisa';
// }
// echo Coba::NAMA;

class Coba{
	public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;

 ?>

<!-- magic constant 
	__LINE__
	__FILE__
	__DIR__
	__FUNCTION__
	__CLASS__
	__TRAIT__
	__METHOD__
	__NAMESPACE__
	-->