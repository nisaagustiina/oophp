<?php 

// class ContohStatic{
// 	public static $angka=1;

// 	public static function halo(){
// 		return "halo" . self::$angka++ . "kali";
// 	}
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class ContohStatic{
	public static $angka=1;

	public function halo(){
		return "halo" . self::$angka++ . "kali <br>";
	}
}

$obj = new ContohStatic();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

$obj1 = new ContohStatic();
echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();

 ?>