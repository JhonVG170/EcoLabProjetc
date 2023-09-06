<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um algoritmo para ler dois valores reais e exibir o primeiro com acréscimo de 30%, e o segundo com desconto de 25%</h1>
    
    <form action="exercicio2_back.php" method="POST">
        <div>
            <label for="acre">Digite o valor a ter um acréscimo de 30%: </label>
            <input type="text" name="acre" id="acre"><br>

            <label for="desc">Digite o valor a ter um desconto de 25%: </label>
            <input type="text" name="desc" id="desc"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>