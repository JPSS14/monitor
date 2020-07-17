<?php
class Exercise{
    private $name;
    private $region;
    private $specialty;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this -> name = $name;
    }
    public function getRegion(){
        return $this->region;
    }
    public function setRegion($region){
        $this -> region = $region;
    }
    public function getSpecialty(){
        return $this->specialty;
    }
    public function setSpecialty($specialty){
        $this -> specialty = $specialty;
    }

    // LIST ALL EXERCISES
    public function returnAllExercise($cx){
        $connection = $cx;
        $select = "SELECT * FROM exercicio";
        $result = mysqli_query($connection, $select);

        if(!$result){
            die("Erro no banco exercicio no método returnAllExercise");
        }
        return $result;
    }

    // ADD EXERCISE
    public function addExercise($cx){
        $connection = $cx;
        $add = "INSERT INTO exercicio (nome, regiao, especialidade) ";
        $add .= "VALUES ('{$this->getName()}','{$this->getRegion()}','{$this->getSpecialty}'";

        $result = mysqli_query($add, $connection);

        if(!$result){
            die("Erro no banco exercicio no método addExercise");
        }
        return $result;
    }

    // UPDATE EXERCISE
    public function updateExercise($cx, $idExerciseP){
        $connection = $cx;
        $idExercise = $idExerciseP;
        $update = "UPDATE exercicio SET ";
        $update .= "nome = '{$this->getName()}', ";
        $update .= "regiao = '{$this->getRegion()}', ";
        $update .= "especialidade = '{$this->getSpecialty()}' ";
        $update .= "WHERE id_exercicio = $idExercise";

        $result = mysqli_query($connection, $update);

        if(!$result){
            die("Erro no banco exercicio no método updateExercise");
        }
        return $result;
    }

    // DELETE EXERCISE
    public function deleteExercise($cx, $idExerciseP){
        $connection = $cx;
        $idExercise = $idExerciseP;
        $delete = "DELETE FROM exercicio ";
        $delete .= "WHERE id_exercicio = {$idExercise}";

        $result = mysqli_query($connection, $delete);

        if(!$result){
            die("Erro no banco exercicio no método deleteExercise");
        }
        return $result;
    }
}