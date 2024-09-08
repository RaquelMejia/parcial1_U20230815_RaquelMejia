<?php
$resultado = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = trim($_POST['frase']);
    
    if (!empty($frase)) {
        $numeroDePalabras = str_word_count($frase);
        $resultado = "<p class='resultado'>La frase tiene $numeroDePalabras palabra(s).</p>";
    } else {
        $resultado = "<p class='error'>Por favor, ingresa una frase.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Palabras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
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
            color: #28a745; 
            padding: 10px;
            border: 1px solid #28a745;
            border-radius: 5px;
            background-color: #d4edda; 
            display: inline-block;
        }
        .error {
            font-size: 18px;
            font-weight: bold;
            color: #dc3545; 
            padding: 10px;
            border: 1px solid #dc3545;
            border-radius: 5px;
            background-color: #f8d7da;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Contador de Palabras</h1>
    <form method="post" action="">
        <label for="frase">Ingresa una frase:</label>
        <input type="text" id="frase" name="frase" required>
        <button type="submit">Contar Palabras</button>
    </form>

    <?php echo $resultado; ?>
</body>
</html>
