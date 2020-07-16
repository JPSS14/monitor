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
    <script src="Assets/scripts.js"></script>
</body>

</html>