<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um algoritmo para ler o nome e a idade de uma pessoa, e exibir
quantos dias de vida ela possui. Considere sempre anos completos, e
que um ano possui 365 dias. Ex: uma pessoa com 19 anos possui 6935
dias de vida; veja o exemplo de saída.</h1>
    
    <form action="exercicio5_back.php" method="POST">
        <div>
            <label for="nome">Digite o nome: </label>
            <input type="text" name="nome" id="nome"><br>

            <label for="ano">Digite a idade(anos): </label>
            <input type="text" name="ano" id="ano"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>