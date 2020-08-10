<?php

class Conexao{

    public $localhost = "localhost";
    public $usuario = "root";
    public $senha = "";
    public $banco = "softmidia_bd";
    
    public function getMysqli(){

        // Conecta-se ao banco de dados MySQL
        $mysqli = new mysqli($this->localhost, $this->usuario, $this->senha, $this->banco);

        return $mysqli;
        
    }
    

}
    


    


?>

