<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um algoritmo para ler o nome, sexo (M ou F) e a idade de uma
pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos,
imprimir o nome da pessoa e a mensagem “ACEITA”. Caso Contrário,
imprimir o nome da pessoa e a mensagem “NÃO ACEITA”.
(Considerar f ou F).</h1>
    
    <form action="exercicio17_back.php" method="POST">
        <div>
            <label for="nome">Digite o nome: </label>
            <input type="text" name="nome" id="nome"><br><br>

            <label for="sexo">Digite o sexo:<br>M = Masculino<br>F = Feminino<br>resposta: </label>
            <input type="text" name="sexo" id="sexo"><br><br>

            <label for="idade">Digite a idade: </label>
            <input type="text" name="idade" id="idade"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>