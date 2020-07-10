<?php
class ListaExercicio{
    private $dia;
    private $quantidade;
    private $idExercicio;
    
    public function getDia(){
        return $this->dia;
    }
    public function setDia($dia){
        $this->dia = $dia;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function getIdExercicio(){
        return $this->idExercicio;
    }
    public function setExercicio($idExercicio){
        $this->idExercicio = $idExercicio;
    }

    public function returnAllSeries($cx){
        $connection = $cx;
        $select = "SELECT * FROM exercicio";
        $result = mysqli_query($connection, $select);
        
        if(!$result){
            die("Erro no banco lista_exercicio");
        }

        return $result;
    }
}