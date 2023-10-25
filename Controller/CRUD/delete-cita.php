<?php 

require_once('../../Model/Models/Citas.php');

$citas = new Citas;


$id = $_GET['id'];

if($citas = $citas->DeleteCitas($id)){
    echo "<script>
    alert('Se ha eliminado la cita')
    window.location.href = '../../View/admin/tables.php';
    </script>";
}else {
    echo "<script>
    alert('ha ocurrido un eroror al eliminar')
    window.location.href = '../../View/admin/tables.php';
    </script>";
}

?>

