<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	$a=1000;
	$b=5;
	$c=10;
	echo "vamos a mostrar tres números $a, $b y $c ordenados de menor a mayor...y el resultado es:</br>";

	if($a<$b && $b<$c){
		echo "<table border='1'><tr><td>$a </td><td> $b </td><td> $c </td></tr>";
	}else if($a<$c && $c<$b){
		echo "<table border ='2'><tr><td>$a </td><td>$c </td><td> $b</td></tr>";
	}else if($b<$a && $a<$c){
		echo "<table border='3'><tr><td>$b </td><td>$a</td><td>$c</td></tr>";
	}else if($b<$c && $c<$a){
		echo "<table border='4'><tr><td>$b </td><td> $c </td><td> $a</td></tr>";
	}else if($c<$a && $a<$b){
		echo "<table border='5'><tr><td>$c</td><td>$a</td><td>$b</td></tr>";
	}else{
		echo "<table border ='6'<tr><td>$c</td><td>$b</td><td>$a</td></tr>";
	}

	?>

</body>
</html>