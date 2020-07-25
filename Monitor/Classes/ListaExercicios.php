<?php
class ListaExercicio{
    private $day;
    private $quantity;
    private $idExercise;
    
    public function getDay(){
        return $this->day;
    }
    public function setDay($day){
        $this->day = $day;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    public function getIdExercise(){
        return $this->idExercise;
    }
    public function setIdExercise($idExercise){
        $this->idExercise = $idExercise;
    }
    // LIST ALL SERIES
    public function returnAllSeries($cx){
        $connection = $cx;
        $select = "SELECT * FROM lista_exercicios";
        $result = mysqli_query($connection, $select);
        
        if(!$result){
            die("Erro no banco lista_exercicio");
        }
        return $result;
    }

    // LIST ALL SERIES ESPECIFCS
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

    // ADD SERIES
    public function addSeries($cx){
        $connection = $cx;
        $add = "INSERT INTO lista_exercicios (id_exercicio, dia, quantidade) ";
        $add .= "VALUES ('{$this->getIdExercise()}','{$this->getDay()}',{$this->getQuantity()})";

        $result = mysqli_query($connection, $add);

        if(!$result){
            die("Erro no banco lista_exercicios no método addSerie");
        }
        return $result;
    }

    // UPDATE SERIES
    public function updateSeries($cx, $idSerieP){
        $connection = $cx;
        $idSerie = $idSerieP;
        $update = "UPDATE lista_exercicios SET ";
        $update .= "dia = '{$this->getDay()}', ";
        $update .= "id_exercicio = {$this->getIdExercise()}, ";
        $update .= "quantidade = {$this->getQuantity()} ";
        $update .= "WHERE id = {$idSerie}";

        $result = mysqli_query($connection, $update);

        if(!$result){
            die("Erro no banco lista_exercicios no método updateSeries");
        }
        return $result;
    }

    // DELETE SERIES
    public function deleteSeries($cx, $idSerieP){
        $connection = $cx;
        $idSerie = $idSerieP;
        $delete = "DELETE FROM lista_exercicios ";
        $delete .= "WHERE id = {$idSerie}";

        $result = mysqli_query($connection, $delete);

        if(!$result){
            die("Erro no banco lista_exercicios no método deleteSeries");
        }
        return $result;
    }

    // LIST FILTER SERIES
    public function filterSeries($cx){
        $connection = $cx;

        $select = "DROP VIEW IF EXISTS relatorio";
        $result = mysqli_query($connection, $select);
        if(!$result){
            die("Erro no banco 1");
        }
        $select = "CREATE VIEW relatorio AS ";
        $select .= "SELECT e.id_exercicio, le.dia, le.quantidade, e.nome, e.regiao ";
        $select .= "FROM exercicio AS e ";
        $select .= "RIGHT JOIN lista_exercicios AS le ON e.id_exercicio = le.id_exercicio ";
        $select .= "WHERE id_exercicio={$this->getIdExercise()} AND dia='{$this->getDay()}'";

        $result = mysqli_query($connection, $select);
        if(!$result){
            die("Erro no banco no método filterSeries");
        }

        $select = "SELECT * FROM relatorio";
        $result = mysqli_query($connection, $select);
        
        return $result;
    }

}