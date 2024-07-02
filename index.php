<?php
    echo '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aprenda Python!</title>
</head>

<body>
    <h1>Aula de Python: Olá, Mundo!</h1>
    <p>Em Python, usamos a função <code>print()</code> para mostrar texto na tela:</p>
    <pre class="codigo-em-python"><code>print(\'Olá, mundo!\')</code></pre>
    <pre class="codigo-em-python"><code>print("Olá, mundo!")</code></pre>
    <p>Ambas as formas acima são corretas para imprimir \'Olá, mundo!\'.</p>
    <br>
    <form action="codigo.php" method="POST" class="formulario">
    <label for="mensagem" class="label-formuluario">Sua vez! Digite seu código:</label><br>
    <textarea id="mensagem" name="mensagem" rows="10" cols="80" class="codigo-usuario"></textarea><br>
    <input type="submit" value="Enviar" class="botao-enviar">
    </form>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: rgb(223, 227, 226);
            margin: 20px;
            padding: 0;
        }
        h1{
            color: #333;
            text-align: center;
            padding-bottom: 20px;
            color: #2ecc71;
        }
        p{
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
            font-size: 18px;
        }
        .codigo-em-python{
            background-color: #f9f9f9;
            padding: 10px;
            border-left: 3px solid #4CAF50;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .codigo-em-python code{
            color: #333;
        }
        .formulario{
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: \'Arial\', sans-serif;
            text-align: center;
        }
        .label-formuluario{
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
            display: block;
            margin-bottom: 10px;
            color: #2ecc71;
        }
        .codigo-usuario{
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #3498db;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box; /* Para incluir padding e borda no cálculo de largura */
            transition: border-color 0.3s ease;
        }
        .codigo-usuario:focus{
            outline: none;
            border-color: #2ecc71; /* Altera a cor da borda ao focar */
        }
        .botao-enviar{
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
        .botao-enviar:hover{
            background-color: greenyellow; /* Altera a cor de fundo ao passar o mouse */
        }
    </style>
    
</body>
</html>';
?>