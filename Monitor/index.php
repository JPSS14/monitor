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
    <?php
    // HEADER
    require "Themes/MonitorTheme/header.php";
    // MAIN
    require "Themes/MonitorTheme/main.php";
    ?>

    <script src="Assets/jquery.js"></script>
    <script>
        $('#regiao').change(function(e) {
            var regiao = $(this).val();
            console.log(regiao);
            $.ajax({
                type: "GET",
                data: "regiao=" + regiao,
                url: "http://localhost/Monitor/Assets/Functions/RetornarExercicios.php",
                async: false
            }).done(function(data) {
                var exercicio = "";
                exercicio += '<option value="" disabled selected>Selecione...</option>';
                $.each($.parseJSON(data), function(chave, valor) {
                    exercicio += '<option value="' + valor.id_exercicio + '">' + valor.nome + '</option>';
                });
                $('#exercicio').html(exercicio);
            })
        });
    </script>
</body>

</html>