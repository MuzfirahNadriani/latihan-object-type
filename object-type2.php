<?php
class drakor{
public $judul,
	   $genre, 
	   $jumlahepisode;

public function getCetak(){
	return "$this->genre, ($this->jumlahepisode)";
}
public function __construct($judul="judul",$genre="genre",$jumlahepisode=0){
	$this->judul =$judul;
	$this->genre=$genre;
	$this->jumlahepisode=$jumlahepisode;
 	}
}
Class cetakInfodrakor{
	public function cetakInfo(drakor $drakor){
		$str="{$drakor->judul}, {$drakor->getCetak()}";
		return $str;
	}
}

$drakor1 = new drakor("The king eternal monarch", "Fantasy", 16);
$drakor2 = new drakor("Moon lovers", "Historical", 20);
$drakor3 = new drakor("Hospital playlist", "Medical drama", 12);
$drakor4 = new drakor("Welcome to Waikiki", "Comedy", 16);
$infoDrakor = new cetakInfodrakor();

echo "Nama Drakor : " .$drakor1->getCetak();
echo "<br>";
echo "Nama Drakor : " .$drakor2->getCetak();
echo "<br>";
echo "Nama Drakor : " .$drakor3->getCetak();
echo "<br>";
echo "Nama Drakor : " .$drakor4->getCetak();
echo "<br>";
echo $infoDrakor-> cetakInfo($drakor4);

?>