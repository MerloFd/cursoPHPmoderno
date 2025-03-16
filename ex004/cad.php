<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php //GET para URL, POST para form, REQUEST para quando é GET,POST ou COOKIE (acessa valores sem se preocupar com o metodo, nao é boa pratica.)
            $nome = $_POST["nome"] ?? "input inválido"; // POST é mais indicado pois nao aparece na URL, melhor para dado sensiveis.
            $sobrenome = $_POST["sobrenome"] ?? "input inválido";
            echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome</strong> ! Este é o meu site."
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>