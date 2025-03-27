<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Sono</title>
</head>
<body>
    <h1>Calculadora IMC</h1>
    <form action="./calcularSono" method="POST">
        <fieldset>
            <input type="hidden" name="_token" value="<?= csrf_token() ?>">
            <p>
                <label for="horas-sono">Quantas horas de sono em média você dorme?</label>
                <input type="number" name="horas-sono" required>
            </p>

            <button type="submit">Calcular</button>
        </fieldset>
    </form>
</body>
</html>