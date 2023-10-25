<?php 
require_once('../../Model/Models/Citas.php');

$id = $_POST['id'];
$name = $_POST['name'];
$correo = $_POST['email'];
$fecha = $_POST['date'];
$tel = $_POST['tel'];
$categoria = $_POST['categoria'];



$citas = new Citas;

if($citas = $citas->UpdateCitas($id, $name, $correo, $fecha, $tel, $categoria)){
    echo "<script>
    alert('Se actualizó con exito')
    </script>";
}else {
    echo "<script>
    alert('ha ocurrido un eroror al actualizar')
    </script>";
}


?>