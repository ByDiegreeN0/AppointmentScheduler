<?php 

require_once("Connection.php");
class Categorias extends Connection {
    private $id;
    private $name;
    private $Connect;

    public function __construct(){

        parent::__construct();
        $this->Connect = $this->connectDatabase();
    }

    public function create($name){
        $sql = "INSERT INTO categoria_citas (categoria_name) VALUES (?)";
        $prepare = $this->Connect->prepare($sql);

        if($prepare){
            $prepare->bind_param("s", $name);

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

    public function GetCategoria(){
        $sql = "SELECT * FROM categoria_citas";
        $row = $this->Connect->query($sql);

    if($row){
        return $row->fetch_all(MYSQLI_ASSOC);
    }else {
        return false;
    }
    }
}
