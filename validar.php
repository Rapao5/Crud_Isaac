
<?php

//conexion
include ("conexionBD.php");

// metodo post
$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';

// trim en todos los campos
$nombre  = trim($_POST['nombre']  ?? '');
$efecto = trim($_POST['efecto'] ?? '');
$danho = trim($_POST['danho'] ?? '');


if(!isset($_POST['tipo']) || empty($_POST['tipo'])){

    echo "no seleccionaste nada";

}
//valida el minimo de caracter en letras
if (strlen($nombre) < 2 || strlen($nombre) > 100) {

    echo "nombre valido";

} else {
    echo "nombre no valido";
}
// selecciona el tipo desde la base de datos
 $result = $conn->query("SELECT tipo from items");
 
        while ($row = $result->fetch_assoc()) {

            echo "<option value='{$row['tipos']}'></option>";
        }
?>