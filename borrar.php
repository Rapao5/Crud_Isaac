<?php 

include ("conexionBD.php");

$conexion=abrir_conexion("localhost", "root", "", "isaac");



if(isset($_POST['id_item'])){
    $borrar="delete from items where id=".$_POST['id_items'];
    mysqli_query($conexion, $borrar);    
}

?>