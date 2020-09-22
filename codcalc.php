<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	$a=$_POST['num1'];
	$b=$_POST['num2'];
	$op=$_POST['operador'];

	if($op=='+'){
		$c=$a+$b;
	}else if($op=='-'){
		$c=$a-$b;
	}else if($op=='*'){
		$c=$a*$b;
	}else if($op=='/'){
		$c=$a/$b;
	}else if($op=='%'){
		$c=$a%$b;
	}

	echo "El resultado de la operación es &nbsp $c"; 

	?>

</body>
</html>

