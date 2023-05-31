<?php
	session_start();
	if(isset($_SESSION['usuario'])){
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
</head>
<body>
<div align="center">	<img src="../img/index.jpg" width="900px"> </div>
</body>
</html>
<?php
	}else{
		header("location:../index.php");
	}
 ?>
