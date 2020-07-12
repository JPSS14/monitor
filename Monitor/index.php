<?php
include("Classes/Conection.php");
include("Classes/ListaExercicios.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Monitor</title>
    <link rel="stylesheet" href="Assets/Styles/boot.css" />
    <link rel="stylesheet" href="Themes/MonitorTheme/style.css" />
</head>

<body>
    <header class="main_header">
        <h1 class="main_header_logo">Monitor</h1>
    </header>
    <main class="main_content">
        <aricle class="main_content_result">
            <header>
                <h1>Resultados</h1>
            </header>
            <?php
            $c = new Conection();
            $c->conect();
            $cx = $c->conect();
            $li = new ListaExercicio();
            $tr = $li->returnAllSeriesR($cx);
            while ($linha = mysqli_fetch_assoc($tr)) {
                echo utf8_encode(" " . $linha["nome"] . " " . $linha["regiao"] . " " . $linha["dia"] . " " . $linha["quantidade"]);
            }
            ?>
        </aricle>
        <article class="main_content_insert">
            <header>
                <h1>Inserir nova série</h1>
            </header>
            <form class="main_content_insert_form" method="post" action="insert.php">
                <input type="date" name="dia">
                <select name="regiao">
                    <option value="1">Superior</option>
                    <option value="2">Inferior</option>
                    <option value="3">Core</option>
                </select>
                <input type="text" name="name" placeholder="Nome">
                <input type="number" name="quantidade" placeholder="Quantidade">
                <input type="submit" value="Cadastrar Serie">
            </form>
        </article>
    </main>
</body>

</html>