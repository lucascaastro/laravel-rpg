<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <form action="/calcular" method="POST">
        @csrf
        <input type="number" name="num1" placeholder="Número 1">
        <select name="operador">
            <option selected></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2">
        <button type="submit">Somar</button>
    </form>
</body>
</html>
