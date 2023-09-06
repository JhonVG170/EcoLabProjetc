<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um algoritmo para ler a distância (km) e o tempo de viagem
(horas) de um automóvel, e dizer se a velocidade média for superior
ao limite (110 km/h) ou não.</h1>
    
    <form action="exercicio12_back.php" method="POST">
        <div>
            <label for="km">Digite a distância (km): </label>
            <input type="text" name="km" id="km"><br>

            <label for="tempo">Digite o tempo de viagem(horas): </label>
            <input type="text" name="tempo" id="tempo"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>