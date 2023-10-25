<?php 

require_once('../../Model/Models/Citas.php');

$cita = new Citas;

$ident = $_POST['ident'];
$name = $_POST['name'];
$edad = $_POST['edad'];
$tel = $_POST['tel'];
$email = $_POST['email'];

if($cita->CreateCita($ident, $name, $edad, $tel, $email)){
    echo "<script>
    window.location.href = '../../View/admin/tables.php';
    </script>";
}else {
    echo "<script>
    alert('Un error ha ocurrido, intentalo otra vez')
    window.location.href = '../../View/admin/tables.php';
    </script>";
}




?>