<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_usuario'},$c{'nombre'},$c{'edad'},$c{'tipo'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM usuario where id_usuario= ? ", array ("{$id}"));        
$ObjDemo= new Demo($rows[0]{'id_usuario'},$rows[0]{'nombre'},$rows[0]{'tipo'},$rows[0]{'edad'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre,$tipo,$edad) {
    $insertrow = self::$db->updateRow("UPDATE public.usuario SET nombre = ? ,tipo = ? ,edad = ?  where id_usuario= ? ", array ("{$nombre}","{$tipo}","{$edad}",$id));

}
function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.usuario where id_usuario= ? ", array ("{$id}"));

}



}
?>

