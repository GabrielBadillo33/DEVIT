<?php
session_start();

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_online";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Preparar y ejecutar la consulta
$sql = "SELECT id, email, password FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

// Verificar si el usuario existe
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $email, $hashed_password);
    $stmt->fetch();

    // Verificar la contraseña
    if (password_verify($password, $hashed_password)) {
        // Iniciar sesión
        $_SESSION['user_id'] = $id;
        $_SESSION['email'] = $email;
        header("Location: ../HOME/home.php");
        exit();
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta";
    }
} else {
    // Usuario no encontrado
    echo "Usuario no encontrado";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
