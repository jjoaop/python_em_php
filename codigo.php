<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprenda Python!</title>
</head>

<body>
    <?php

        $codigos_permitidos = array(
            "print('Olá, mundo!')",
            "print(\"Olá, mundo!\")",
        );

        // verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // verifica se o campo 'mensagem' foi enviado
            if (isset($_POST['mensagem'])) {
                $mensagem = $_POST['mensagem'];
                // verifica se o código enviado está presente no array
                if (in_array($mensagem, $codigos_permitidos)) {
                    echo "<h1> Parabéns! Você escreveu seu primeiro código em Python. </h1> <br>";
                } else {
                    echo "<h1> Seu código está incorreto ou vazio, verifique a sintaxe. <br> Por favor, tente novamente! </h1> <br>";
                }
            }
        }

        echo '<a href="index.php"><p class="botao-centro"><button class="botao-voltar">Clique aqui para voltar</button></p></a>';
        echo '
        <style>

            body{
                font-family: Arial, sans-serif;
                background-color: rgb(223, 227, 226);
                margin: 20px;
                padding: 0;
            }

            h1{
                padding-top: 60px;
                color: #333;
                text-align: center;
                padding-bottom: 30px;
                color: #2ecc71;
            }

            .botao-voltar{
                background-color: green;
                color: #fff;
                padding: 12px 20px;
                border: none;
                border-radius: 6px;
                font-size: 18px;
                text-transform: uppercase;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .botao-voltar:hover{
                background-color: greenyellow;
            }

            .botao-centro{
                padding-top: 60px;
                text-align: center;
            }

        </style>';
    ?>
</body>
</html>