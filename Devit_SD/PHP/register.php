<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_online";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo_electronico = $_POST['email'];
    $password = $_POST['password'];

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepara la consulta SQL para insertar los datos del usuario
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";

    // Proteger la base de datos contra inyección SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo_electronico, $hashed_password);

    if ($stmt->execute()) {
        // Redirige a una página distinta si hay éxito en el registro
        header('Location: ../sesion.php');
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
