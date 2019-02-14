<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
$Mang = array(2,7,3,4,5,6);
$min = $Mang[0];
for ($i= 0;$i< count($Mang) ; $i++) {
	if ($Mang[$i] < $min  )
		 $min = $Mang[$i] ;
}
echo $min;
 ?>
</body>
</html>