<?php
$meses = array(
	'Enero','Febrero','Marzo','Abril','Mayo',
	'Junio','Julio','Agosto','Septiembre',
	'Octubre','Noviembre','Diciembre'
	);

foreach ($meses as $mes) {
	echo $mes . '<br />'; 
	if ($mes == 'Abril') break; 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>a ver</title>
</head>
<body>
		<h1> Meses par </h1>
		<?php
		foreach($meses as $mes)
		{
			if($mes == 'Enero' || $mes == 'Marzo' || $mes == 'Mayo' || $mes == 'Julio' ||$mes == 'Septiembre' || $mes == 'Noviembre')
			{
				continue; 
			}
			echo $mes . '<br />'; 
		}

		?>
</body>
</html>