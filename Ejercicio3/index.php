<?php
// Conexión a la base 
$pdo = new PDO('mysql:host=localhost;dbname=registro', 'root', '');

// Obtener un registro por id
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$stmt->execute(['id' => 1]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

echo "FETCH CON UNA FILA:";
echo "<pre>";
print_r($usuario);
echo "</pre>";

// Obtener todos los registros
$stmt = $pdo->prepare("SELECT * FROM usuarios");
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "FETCH ALL (VARIAS FILAS):";
echo "<pre>";
print_r($usuarios);
echo "</pre>";

// Obtener una columna específica de la primera fila
echo "FETCH ALL (OBTENER UNA COLUMNA DE LA FILA 0):";
echo "<br>" . $usuarios[0]["nombre"];

// Obtener solo una columna (nombre) para un id específico
$stmt = $pdo->prepare("SELECT nombre FROM usuarios WHERE id = :id");
$stmt->execute(['id' => 4]);
$nombre = $stmt->fetchColumn();

echo "<br><br> FETCH COLUMN (SOLO UNA COLUMNA) <br>";
echo $nombre;
?>
