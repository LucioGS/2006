<html>
<head>
</head>
<body>
<?php
	$numero1 = $_POST["num1"];
	$numero2 = $_POST["num2"];
	$calculo = $_POST["calculo"];
	
	if ($calculo == "Suma"){
		$resultado = $numero1 + $numero2;
	}else{
		$resultado = $numero1 - $numero2;
	}
	echo $resultado;
?>
</body>
</html>

