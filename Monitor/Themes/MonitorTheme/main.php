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
                echo utf8_encode("<p class='main_content_result_p'> " . $linha["nome"] . " " . $linha["regiao"] . " " . $linha["dia"] . " " . $linha["quantidade"] . "</p>");
            }
            ?>
        </aricle>
        <article class="main_content_insert">
            <header>
                <h1>Inserir nova série</h1>
            </header>
            <form class="main_content_insert_form" method="post" action="Themes/MonitorTheme/validacao.php">
                <input type="date" name="addDia">
                <select name="addRegiao" id="regiao">
                    <option value="" disabled selected>Selecione...</option>
                    <option value="Superior">Superior</option>
                    <option value="Inferior">Inferior</option>
                    <option value="Core">Core</option>
                </select>
                <select name="addExercicio" id="exercicio">
                    <option value="" disabled selected>Selecione...</option>
                </select>
                <input type="number" name="addQuantidade" placeholder="Quantidade">
                <input type="submit" value="Cadastrar Serie">
            </form>
        </article>
    </main>