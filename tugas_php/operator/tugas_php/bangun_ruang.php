<?php 
//kubus
function kubus($sisi)
{
	$volume = $sisi * $sisi * $sisi;
	return $volume;
}
echo kubus(8);
echo "<br>";
// tabung
function tabung($jari, $tinggi)
{
	$pi = 3.14;
	 $volume = $pi * $jari * $jari * $tinggi;
	 return $volume;
}
echo tabung(3,9);
echo "<br>";
// limas
function limas($LuasAlas, $tinggi)
{
	$volume = 1/3 * $LuasAlas * $tinggi;
	return $volume;
}
echo limas(3,5);


 ?>