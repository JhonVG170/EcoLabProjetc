<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Segundo uma tabela médica, o peso ideal está relacionado com a
altura e o sexo. Fazer um algoritmo que receba a altura e o sexo de
uma pessoa, calcular e imprimir o seu peso ideal, utilizando as
seguintes formulas.
 Para homens: (72.7*Altura) - 58
 Para Mulheres: (62.1*Altura) - 44.7</h1>
    
    <form action="exercicio19_back.php" method="POST">
        <div>
            <label for="sexo">Digite o sexo:<br>M = Masculino<br>F = Feminino<br>resposta: </label>
            <input type="text" name="sexo" id="sexo"><br><br>

            <label for="altura">Digite a altura: </label>
            <input type="text" name="altura" id="altura"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>