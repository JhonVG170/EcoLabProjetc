<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>20.O índice de massa corpórea (IMC), é calculado a partir da seguinte
formula:IMC = Peso(Kg)/Altura²Faça um algoritmo para calcular o IMC de uma pessoa, 
e depois exibir a seguinte classificação:</h1>
    
    <form action="exercicio20_back.php" method="POST">
        <div>
            <label for="peso">Digite o peso: </label>
            <input type="text" name="peso" id="peso"><br>

            <label for="altura">Digite a altura: </label>
            <input type="text" name="altura" id="altura"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>