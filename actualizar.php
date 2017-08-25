<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> actualizar demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$iddemo=$_POST["edad"];
$iddemo=$_POST["tipo"];
$iddemo=$_POST["id_usuario"];
echo "Edicion en proceso . . . . </br>";
include_once("DemoCollector.php");
$DemoCollectorObj= new DemoCollector();
$DemoCollectorObj->updateDemo($id_usuario,$nombre,$tipo,$edad);
echo "id: ".$id_usuario." actualizado a:".$nombre." actualizado a:".$tipo." actualizado a:".$edad." </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
