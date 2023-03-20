<?php 
// luas segitiga
function luas_segitiga($alas, $tinggi){
  $luas = 0.5 * $alas * $tinggi;
  return $luas;
}

echo luas_segitiga(2,4);
echo "<br>";
// luas persegi
function luas_persegi($sisi)
{
  $luas = $sisi * $sisi;
  return $luas;
}
echo luas_persegi(5);
echo "<br>";
// luas trapesium
function luas_trapesium($a, $b, $t){
  $luas = 0.5 * ( $a + $b ) * $t;
  return $luas;
}

echo luas_trapesium(16, 6, 7)." CM <br>";
// persegi panjang
function luas_persegi_panjang($panjang, $lebar){
  $luas = $panjang * $lebar;
  echo "<br>";
  echo "Keliling Persegi Panjang dengan Panjang = $panjang dan Lebar = $lebar adalah ".$keliling = 2 * ( $panjang + $lebar );
}

echo luas_persegi_panjang(4,8);
echo "<br>";
// jajar genjang
function luas_jajar_genjang($a, $b)
{
  $luas = 2 * $b * $a;
  return $luas;
}
echo luas_jajar_genjang(2,9);
?>