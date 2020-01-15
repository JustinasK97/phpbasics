<?php
$duomenys = array('Jonas', 12, true);
$prekes = ['Kompas', 'Telefonas', 'Telikas'];
$prekes[] = 'Pienas';
$prekes[12345] = 'Duona';
$kiekis = count($prekes);
echo $kiekis;
?>
