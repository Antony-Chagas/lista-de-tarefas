<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
</head>
<body>

<div>


    <?php

    include("config.php");

    switch (@$_REQUEST["page"]) {
        case "novo":
            include("adicionar.php");
            break;

        case "listar":
            include("listar-usuario.php");
            break;
        case "salvar":
            include("salvar.php");
            break;
        default:
    }
    ?>

</div>

<div>
    <?php
    include("adicionar.php");
    ?>
</div>

<div>
    <?php
    include("listar-usuario.php");
    ?>
</div>

</body>
</html>