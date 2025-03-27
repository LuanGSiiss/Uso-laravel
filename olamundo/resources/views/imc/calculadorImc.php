<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/calculadoraIMC.js"></script>
    <title>Calculadora IMC</title>
</head>
<body>
    <h1>Calculadora IMC</h1>
    <form action="./CalculadorImc" method="POST">
        <fieldset>
            <input type="hidden" name="_token" value="<?= csrf_token() ?>">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </p>
            <p>
                <label for="data-nascimento">Data de Nascimento:</label>
                <input type="date" name="data-nascimento" id="data-nascimento" required>
            </p>
            <p>
                <label for="peso">Peso(Kg):</label>
                <input type="number" name="peso" id="peso" placeholder="81.2" required>
            </p>
            <p>
                <label for="altura">Altura(cm):</label>
                <input type="number" name="altura" id="altura" placeholder="176" required>
            </p>

            <button type="submit">Calcular</button>
        </fieldset>
    </form>
</body>
</html>