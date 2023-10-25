<?php

require_once("Connection.php");


class Citas extends Connection {

private $id;
private $name;
private $correo;
private $fecha;
private $tel;
private $categoria;
private $connect;

public function __construct(){
    parent::__construct();
    $this->connect = $this->connectDatabase(); // conecta la base de datos
}

public function CreateCita($name, $correo, $fecha, $tel, $categoria){
    $sql = "INSERT INTO citas (cliente_name, cliente_correo, cliente_fecha, cliente_tel, categoria_id) VALUES (?,?,?,?,?)";
    $prepare = $this->connect->prepare($sql);

    if($prepare){
        $prepare->bind_param("ssisi", $name, $correo, $fecha, $tel, $categoria);

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

public function GetCitasInnerJoin(){
    $sql = "SELECT citas.cliente_id, citas.cliente_name, citas.cliente_correo, citas.cliente_fecha, citas.cliente_tel, categoria_citas.categoria_name, categoria_citas.categoria_precio
    FROM citas
    INNER JOIN categoria_citas ON citas.categoria_id = categoria_citas.categoria_id;
    ";

    $row = $this->connect->query($sql);

    if($row){
        return $row->fetch_all(MYSQLI_ASSOC);
    }else {
        return false;
    }
}

public function GetCitasById($id) {
    $sql = "SELECT * FROM citas where cliente_id = ?";
    $stmt = $this->connect->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    } else {
        return false; 
    }
}

public function UpdateCitas($id, $name, $correo, $fecha, $tel, $categoria){
    $sql = "UPDATE citas SET cliente_name = ?, cliente_correo = ?, cliente_fecha = ?, cliente_tel = ?, categoria_id = ? WHERE cliente_id = ?";
    
    $stmt = $this->connect->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssii", $name, $correo, $fecha, $tel, $categoria, $id);
        if ($stmt->execute()) {
            return true; 
        } else {
            return false; 
        }
    } else {
        return false;
    }
}


public function DeleteCitas($id){
    $sql = "DELETE FROM citas where cliente_id = ?";
    $prepare = $this->connect->prepare($sql);

    if($prepare){
        $prepare->bind_param("i", $id);

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

}

?>
