<?php 
require_once '../config.php';
class Usuarios 
{
   //LISTADO DE CLIENTES 
 public function mostrar_usuarios()
 {
    $result = $this->mysqli->query("SELECT * FROM usuarios");
    while($fila = $result ->fetch_assoc()){
        $data[] = $fila;

    }
     if (isset($data)) {
     return $data;
    }
 }

}
