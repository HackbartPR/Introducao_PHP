<?php
    require_once("./functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <dl>
        <?php foreach($contasCorrentes as $cpf=>$conta){ ?>
            <dt><?= $conta['titular'] ?></dt>
            <dd>CPF: <?= $cpf ?></dd>
            <dd>Saldo: <?= $conta['saldo'] ?></dd>
        <?php } ?>
    </dl>
</body>
</html>