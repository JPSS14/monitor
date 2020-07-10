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
                $li->returnAllSeries($cx);
                for ($row_no = 0; $row_no > $li->num_rows; $row_no++) {
                    $res->data_seek($row_no);
                    $row = $res->fetch_assoc();
                    echo " Nome = " . $row['nome'] . "\n";
                }
            ?>
        </aricle>
        <article class="main_content_insert">
            <header>
                <h1>Inserir nova série</h1>
            </header>
            <form class="main_content_insert_form" method="post" action="insert.php">
                <input type="text" title="name" placeholder="Nome">
            </form>
        </article>
    </main>
</body>

</html>