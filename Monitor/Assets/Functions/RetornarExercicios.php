<?php
$callback = isset($_GET['callback']) ? $_GET['callback'] : false;
$conecta = mysqli_connect("localhost","root","","monitor");



if(isset($_GET['regiao'])){
    $catEx = $_GET['regiao'];
}else{
    $catEx = "Superior";
}

$selecao = "SELECT id_exercicio, nome FROM exercicio ";
$selecao .= "WHERE regiao = '{$catEx}'";
$consult = mysqli_query($conecta, $selecao);

$result = array();
while($linha = mysqli_fetch_object($consult)){
    $result[] = $linha;
}

mb_convert_variables('UTF-8','iso-8859-1',$result);
echo json_encode($result);    
// fechar conecta
mysqli_close($conecta);