<?php 

require_once('../../Model/Models/Citas.php');

$cita = new Citas;

$name = $_POST['name'];
$email = $_POST['email']; 
$date = $_POST['date'];
$tel = $_POST['tel'];
$categoria = $_POST['categoria'];

if($cita->CreateCita($name, $email, $date, $tel, $categoria)){
    echo "<script>
    window.location.href = '../../View/web/index.php';
    alert('Tu cita fue registrada')
    </script>";
}else {
    echo "<script>
    alert('Un error ha ocurrido, intentalo otra vez')
    window.location.href = '../../View/web/index.php';
    </script>";
}

