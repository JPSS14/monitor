<?php
class Exercise{
    private $name;
    private $regiao;
    private $especialidade;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this -> name = $name;
    }
    public function getRegiao(){
        return $this->regiao;
    }
    public function setRegiao($regiao){
        $this -> regiao = $regiao;
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade){
        $this -> especialidade = $especialidade;
    }
}