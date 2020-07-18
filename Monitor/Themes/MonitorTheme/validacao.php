<?php
// print_r($_POST["regiao"]);
// print_r($_POST["exercicio"]);
// print_r($_POST["dia"]);
// print_r($_POST["quantidade"]);
include ("../../Classes/Conection.php");
include ("../../Classes/ListaExercicios.php");

if (isset($_POST["addRegiao"])){
    $c = new Conection();
    $cx = $c->conect();
    $le = new ListaExercicio();
    $le->setDay($_POST["addDia"]);
    $le->setIdExercise($_POST["addExercicio"]);
    $le->setQuantity($_POST["addQuantidade"]);

    $le->addSeries($cx);
    echo "Cadastrado com sucesso";
}else{
    echo "ih rapaz";
}