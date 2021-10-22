<?php
//En esta se encuentra la conexion a la base de 
class Connection 
{
    function __construct(){
        $this->db = new QueryManager("root","","ControlInventarios");
    }
}

?>