<?php 
$meses = array(
	'en','fe','ma','ab','ma','ju','ju','ag'
	);

for($i = 0; $i<count($meses); $i++)
{
	echo "mes: " . $meses[$i] . '<br />'; 
}
echo '<br /';
$contador = 0; 

while ($contador < count ($meses))
{
	echo "mes: " . $meses[$contador] . '<br />'; 
	++$contador; 
}




?>