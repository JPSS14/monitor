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
        $select = "SELECT * FROM lista_exercicios";
        $result = mysqli_query($connection, $select);
        
        if(!$result){
            die("Erro no banco lista_exercicio");
        }
        return $result;
    }

    public function returnAllSeriesR($cx){
        $connection = $cx;

        $select = "DROP VIEW IF EXISTS relatorio";
        $result = mysqli_query($connection, $select);
        if(!$result){
            die("Erro no banco 1");
        }
        $select = "CREATE VIEW relatorio AS ";
        $select .= "SELECT e.id_exercicio, le.dia, le.quantidade, e.nome, e.regiao ";
        $select .= "FROM exercicio AS e ";
        $select .= "RIGHT JOIN lista_exercicios AS le ON e.id_exercicio = le.id_exercicio";

        $result = mysqli_query($connection, $select);
        if(!$result){
            die("Erro no banco 2");
        }

        $select = "SELECT * FROM relatorio";
        $result = mysqli_query($connection, $select);
        
        return $result;
    }

}