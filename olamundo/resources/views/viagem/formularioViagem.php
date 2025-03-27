<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Viagem</title>
</head>
<body>
    <h1>Calculadora de consumo de Viagem</h1>
    <form action="./calcularViagem" method="POST">
        <fieldset>
            <input type="hidden" name="_token" value="<?= csrf_token() ?>">
            <p>
                <label for="distancia">Distancia Total(Km):</label>
                <input type="number" name="distancia" required>
            </p>
            <p>
                <label for="consumo-carro">Consumo do carro:</label>
                <input type="number" name="consumo-carro" required>
            </p>
            <p>
                <label for="preco-gasolina">preco da gasolina(centavos):</label>
                <input type="number" name="preco-gasolina" required>
            </p>
            <button type="submit">Calcular</button>
        </fieldset>
    </form>
</body>
</html>