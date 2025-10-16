<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_NAME', 'reservapro_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');
try {
// Crear conexión PDO
$pdo = new PDO(
"mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" .
DB_CHARSET,
DB_USER,
DB_PASS,
[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false
]
);
// Mensaje opcional para verificar conexión (eliminar en producción)
// echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
// Manejo de errores
die("Error de conexión: " . $e->getMessage());
}
?>