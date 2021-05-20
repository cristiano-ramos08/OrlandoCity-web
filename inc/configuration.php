<?php

class Sql {
    public $conn;

    //"__" faz alguma ação de forma auomatica (método magico)
    public function __construct(){

        return $this->conn = mysqli_connect("127.0.0.1", "root", "", "hcode_shop");

    }
    public function query($string_query){
        return mysqli_query($this->conn, $string_query);
    }

    //recebe as querys (ex: select)
    public function select($string_query){

        //o que passar para a variavel "$string_query, irá executar"
        $result =  $this->query($string_query);

        $data = array();

        while ($row = mysqli_fetch_array($result)) {
            
            array_push($data, $row);

        }
        unset($result);
        return $data;
    }

    public function __destruct(){

        mysqli_close($this->conn);

    }
            
}   

?>
