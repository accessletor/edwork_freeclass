<?php
function hitungVolumeKubus($sisi) {
  $volume = pow($sisi, 3);
  return "Volume kubus dengan sisi $sisi adalah $volume";
}

function hitungVolumeBalok($panjang, $lebar, $tinggi) {
  $volume = $panjang * $lebar * $tinggi;
  return "Volume balok dengan panjang $panjang, lebar $lebar, dan tinggi $tinggi adalah $volume";
}

function hitungVolumeTabung($jari_jari, $tinggi) {
  $volume = pi() * pow($jari_jari, 2) * $tinggi;
  return "Volume tabung dengan jari-jari $jari_jari dan tinggi $tinggi adalah $volume";
}

function hitungVolumeBola($jari_jari) {
  $volume = 4/3 * pi() * pow($jari_jari, 3);
  return "Volume bola dengan jari-jari $jari_jari adalah $volume";
}

function hitungVolumeLimas($luas_alas, $tinggi) {
  $volume = 1/3 * $luas_alas * $tinggi;
  return "Volume limas dengan luas alas $luas_alas dan tinggi $tinggi adalah $volume";
}

function hitungLuasPersegi($sisi) {
  $luas = pow($sisi, 2);
  return "Luas persegi dengan sisi $sisi adalah $luas";
}

function hitungLuasPersegiPanjang($panjang, $lebar) {
  $luas = $panjang * $lebar;
  return "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah $luas";
}

function hitungLuasSegitiga($alas, $tinggi) {
  $luas = 1/2 * $alas * $tinggi;
  return "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luas";
}

function hitungLuasLingkaran($jari_jari) {
  $luas = pi() * pow($jari_jari, 2);
  return "Luas lingkaran dengan jari-jari $jari_jari adalah $luas";
}

function hitungLuasTrapesium($sisi_a, $sisi_b, $tinggi) {
  $luas = 1/2 * ($sisi_a + $sisi_b) * $tinggi;
  return "Luas trapesium dengan sisi atas $sisi_a, sisi bawah $sisi_b, dan tinggi $tinggi adalah $luas";
}


echo hitungVolumeKubus(5),"<br>";
echo hitungVolumeBalok(3, 4, 5),"<br>";
echo hitungVolumeTabung(2, 8),"<br>";
echo hitungVolumeBola(3),"<br>";
echo hitungVolumeLimas(2,5),"<br>";
echo hitungLuasPersegi(3),"<br>";
echo hitungLuasPersegiPanjang(3,6),"<br>";
echo hitungLuasSegitiga(3,5),"<br>";
echo hitungLuasLingkaran(4),"<br>";
echo hitungLuasTrapesium(2,4,7),"<br>";
?>
