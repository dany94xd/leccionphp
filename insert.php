<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> insert demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$valor=$_POST["nombre"];
echo "Guardando en proceso . . . . </br>";


echo 'hola' . htmlspecialchars($valor) . '!';
include_once("DemoCollector.php");
echo "nombre actualizado a:".$nombre." </br>";

$DemoCollectorObj= new DemoCollector();
$DemoCollectorObj->createDemo($valor);

echo "valor agregado </br>";
?>


<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>

