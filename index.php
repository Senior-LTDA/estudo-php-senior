<?php

// Obtém informações do processo PHP que atende esta requisição.
$versaoPhp = PHP_VERSION;
$dataHoraServidor = date('d/m/Y H:i:s');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ambiente PHP</title>
</head>
<body>
    <h1>Ambiente PHP funcionando</h1>
    <p>Versão do PHP: <?= $versaoPhp ?></p>
    <p>Data e hora do servidor: <?= $dataHoraServidor ?></p>
</body>
</html>