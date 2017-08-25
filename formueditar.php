
<html>
<head>

</head>
<body>
<?php 
$id=$_GET["id"];
echo "valor de id es ". $id;
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj= new DemoCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id);


?>
<h2> Editar Objetos</h2>
                <form  action="actualizar.php" method="post" >
                <p>
                  id:  <imput type ="text" name="iddemo" 
                  value="<?php echo $ObjDemo->getIdDemo();?>" readonly/></p>
                  <a href="eliminar.php"></a> 
                     <a href="editar.php"></a>


<p>
                   nombre:  <imput type ="text" name="nombre" 
                   value="<?php echo $ObjDemo->getNombre();?>" autofocus required></p>
            <a href="index.php">Cancelar</a>
 <input type="submit" name="Guardar">

                </form>


           
</body>



</html>


