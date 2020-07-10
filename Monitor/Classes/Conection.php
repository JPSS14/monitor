<?php
class Conection
{
    public function conect()
    {
        $host = "localhost";
        $password = "";
        $user = "root";
        $bd = "monitor";
        $conection = mysqli_connect($host, $user, $password, $bd);

        if(mysqli_connect_errno()){
            die ("Falha na conexão " . mysqli_connect_errno());
        }else{
            return $conection;
        }
    }
}
