<?php
/**
 * Particularités des tableaux PHP
 * - Opérateur +
 * - Comparaison avec == et ===
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>Tableaux PHP (particularités)</title>
</head>
<body>
<h1>Tableaux PHP (particularités)</h1>
<?php
$o1 = array(1, 2, 3); // 0=>1,1=>2,2=>3
$o2 = array(4, 5, 6); // 0=>4,1=>5,2=>6
$phi = $o1 + $o2;
var_dump($phi); // 0=>1,1=>2,2=>3 : Les mêmes indices dans les deux tableaux : Les valeurs de $o2 sont ignorées

$o1 = array(1, 2, 3); // 0=>1,1=>2,2=>3
$o2 = array();
$o2[3] = 4;
$o2[4] = 5;
$o2[5] = 6; // 3=>4,4=>5,5=>6
$phi2 = $o1 + $o2;
var_dump($phi2); // 0=>1,1=>2,2=>3,3=>4,4=>5,5=>6

$o1 = array('pomme', 'banane'); // 0=>'pomme',1=>'banane'
// var_dump($o1);
$o2 = array(1 => 'banane', 0 => 'pomme'); // 1=>'banane',0=>'pomme'
// L'ordre des éléments ne sera donc pas le même !
$khi = $o1 == $o2;
// var_dump($o2);
var_dump($khi); // boolean true
$khi2 = $o1 === $o2;
var_dump($khi2); // boolean false
?>
</body>
</html>