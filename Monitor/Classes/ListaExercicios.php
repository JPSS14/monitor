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
}