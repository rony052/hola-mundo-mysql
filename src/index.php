
<?php

$host = "db";
$dbname = "hola_mundo";
$username = "root";
$password = "123456";

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "<h1>¡Hola Mundo!</h1>";
    echo "<p>Aplicación PHP conectada correctamente a MySQL.</p>";

    $conexion->exec("
        CREATE TABLE IF NOT EXISTS visitas (
            id INT AUTO_INCREMENT PRIMARY KEY,
            mensaje VARCHAR(100) NOT NULL
        )
    ");

    $consulta = $conexion->prepare(
        "INSERT INTO visitas (mensaje) VALUES (?)"
    );

    $consulta->execute(["Hola Mundo"]);

    echo "<p>Registro guardado correctamente en MySQL.</p>";

} catch (PDOException $e) {
    http_response_code(500);
    echo "Error de conexión: " . htmlspecialchars($e->getMessage());
}
?>
