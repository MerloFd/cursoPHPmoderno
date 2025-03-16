<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste concatenacao e padroes de escrita</h1>
        <?php 
            $nome = "Mathes";
            $sobrenome = "Merlo";
            const PAIS = "Brasil";
            echo "Olá $nome $sobrenome, nacionalidade: " . PAIS . " !";
            $camelCase = "padrao camelCase";
            const SNAKE_CASE = "padrao snake_case";
        ?>
    <h1>Tipos escalares (primitivos)</h1>
        <?php 
        $numero = 7;
        //0x = hexadecimal 0b= binarios 0= octais

        echo "O var_dump mostra o tipo e valor da var, otimo pra depurar. Exemplo: ";
        $v= "merlo";
        var_dump($v);

        //exemplo casting explicito no php, util pra garantir tipagem, ja que e fracamente tipado
        $num = 3e2;
        var_dump($num);
        $num = (int) 3e2; //obriga meu float a virar int
        var_dump($num);

        $variavelGlobal = "estou no escopo global da aplicação, da pra acessar até no local pelo uso do 'global'";

        function testeEscopo (){
            global $variavelGlobal;
            echo $variavelGlobal;
        }
        testeEscopo();

        ?>
</body>
</html>