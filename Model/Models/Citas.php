<?php

require_once("Connection.php");


class Citas extends Connection {

private $id;
private $ident;
private $name;
private $edad;
private $tel;
private $correo;
private $connect;

public function __construct(){
    parent::__construct();
    $this->connect = $this->connectDatabase(); // conecta la base de datos
}

public function CreateCita($ident, $name, $edad, $tel, $correo){
    $sql = "INSERT INTO citas (cliente_ident, cliente_name, cliente_edad, cliente_tel, cliente_correo) VALUES (?,?,?,?,?)";
    $prepare = $this->connect->prepare($sql);

    if($prepare){
        $prepare->bind_param("isiss", $ident, $name, $edad, $tel, $correo);

        if($prepare->execute()){
            $prepare->close();
            return true;
        }else {
            $prepare->close();
            return false;
        }
    }else {
        return false;
    }
}

public function GetCitas(){
    $sql = "SELECT * FROM citas";
    $row = $this->connect->query($sql);

    if($row){
        return $row->fetch_all(MYSQLI_ASSOC);
    }else {
        return false;
    }
}

}

?>
