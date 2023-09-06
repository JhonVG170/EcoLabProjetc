<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um algoritmo para ler três notas de um aluno em uma disciplina
e imprimir a sua média ponderada (as notas tem pesos 1, 2 e 3
respectivamente).</h1>
    
    <form action="exercicio8_back.php" method="POST">
        <div>
            <label for="nome">Digite o nome: </label>
            <input type="text" name="nome" id="nome"><br>

            <label for="nota1">Digite a nota 1: </label>
            <input type="text" name="nota1" id="nota1"><br>

            <label for="nota2">Digite a nota 2: </label>
            <input type="text" name="nota2" id="nota2"><br>

            <label for="nota3">Digite a nota 3: </label>
            <input type="text" name="nota3" id="nota3"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>