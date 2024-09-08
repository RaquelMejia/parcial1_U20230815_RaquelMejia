<?php
$resultado = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

    if (is_numeric($numero1) && is_numeric($numero2)) {
    
        switch ($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
            case 'division':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $error = "No se puede dividir por cero.";
                }
                break;
            default:
                $error = "Operación no válida.";
        }

    } else {
        $error = "Por favor, ingresa números válidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simple</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"], select {
            padding: 10px;
            font-size: 16px;
            margin-right: 10px;
        }
        button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: aqua;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .resultado {
            font-size: 18px;
            font-weight: bold;
            color: dark;
            padding: 10px 15px;
            text-align: center;
            border: 1px solid #28a745;
            border-radius: 3px;
            background-color: yellow;
            max-width: 300px; 
           
        }
        .error {
            font-size: 18px;
            font-weight: bold;
            color: #dc3545;
            padding: 10px;
            border: 1px solid #dc3545;
            border-radius: 5px;
            background-color: #f8d7da;
            max-width: 500px;
        }
    </style>
</head>
<body>
    <h1>Calculadora Simple</h1>
    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" step="any" required>

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" step="any" required>
        <br><br>

        <label>Operación:</label>
        <input type="radio" id="suma" name="operacion" value="suma" required>
        <label for="suma">Suma</label>
        <input type="radio" id="resta" name="operacion" value="resta">
        <label for="resta">Resta</label>
        <input type="radio" id="multiplicacion" name="operacion" value="multiplicacion">
        <label for="multiplicacion">Multiplicación</label>
        <input type="radio" id="division" name="operacion" value="division">
        <label for="division">División</label>
        <br><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!empty($resultado)) {
        echo "<p class='resultado'>El resultado de la operación es: $resultado</p>";
    }
    if (!empty($error)) {
        echo "<p class='error'>$error</p>";
    }
    ?>
</body>
</html>
