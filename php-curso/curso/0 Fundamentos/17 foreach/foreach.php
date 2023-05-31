<?php
$meses = array(
	'Enero','Febrero','Marzo','Abril','Mayo',
	'Junio','Julio','Agosto','Septiembre',
	'Octubre','Noviembre','Diciembre'
	);

$ch = array ('telefono' => 36805851, 'edad' => 20, 'pais'=> 'mexico');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Foreach</title>
</head>
<body>
			<h1> Meses </h1>
			<ul>
			<?php
				foreach ($meses as $mes) {
					echo '<li>'. $mes . '</li>';
				}
					echo '<br />';
				foreach ($ch as $dato => $valor) {
					echo '<li>'. $dato . ': ' . $valor . '</li>';
				}
			?>
			</ul>
</body>
</html>