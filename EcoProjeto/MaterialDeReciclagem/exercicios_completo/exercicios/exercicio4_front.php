<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A padaria HOTPÃO vende uma certa quantidade de pães franceses e
uma quantidade de broas a cada dia. Cada pãozinho custa R$ 0,50 e a
broa custa R$ 2,50. Ao final do dia, o dono quer saber quanto
arrecadou com a venda dos pães e broas (juntos), e quanto deve
guardar em uma poupança (10% do arrecadado). Você foi contratado
para fazer os cálculos para o dono. Com base nestes fatos, faça um
algoritmo para ler as quantidades de pães e de broas, e depois calcular
os dados solicitados.</h1>
    
    <form action="exercicio4_back.php" method="POST">
        <div>
            <label for="qtd_paes">Digite a qtd de pães vendidos: </label>
            <input type="text" name="qtd_paes" id="qtd_paes"><br>

            <label for="valor_paes">Digite o valor dos pães: </label>
            <input type="text" name="valor_paes" id="valor_paes"><br>

            <label for="qtd_broas">Digite a qtd das broas vendidas: </label>
            <input type="text" name="qtd_broas" id="qtd_broas"><br>

            <label for="valor_broas">Digite o valor das broas: </label>
            <input type="text" name="valor_broas" id="valor_broas"><br>
            
            <br><input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>