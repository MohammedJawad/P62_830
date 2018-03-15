<?php
$o1 = array(1, 2, 3); // 0=>1,1=>2,2=>3
$o2 = array(4, 5, 6); // 0=>4,1=>5,2=>6
var_dump($o1); // 0=>1,1=>2,2=>3 : Les mêmes indices dans les deux tableaux : Les valeurs de $o2 sont ignorées
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>Tableaux PHP (particularités)</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
<h1>Tableaux PHP (particularités)</h1>
<?php
echo $o2;
?>
</body>
</html>