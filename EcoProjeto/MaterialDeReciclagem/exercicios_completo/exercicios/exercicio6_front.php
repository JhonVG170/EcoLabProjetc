<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Um motorista deseja colocar no seu tanque X reais de gasolina.
Escreva um algoritmo para ler o preço do litro da gasolina e o valor do
pagamento e exibir quantos litros ele conseguiu colocar no tanque.</h1>
    
    <form action="exercicio6_back.php" method="POST">
        <div>
            <label for="reais">Digite a qtd em R$: </label>
            <input type="text" name="reais" id="reais"><br>

            <label for="preco">Digite o preço da gasolina em R$: </label>
            <input type="text" name="preco" id="preco"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>