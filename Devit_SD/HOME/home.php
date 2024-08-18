<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_online";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar la base de datos
$sql = "SELECT nombre_producto, descripcion_producto, precio_producto, cantidad_producto, imagen_producto FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-container {
            margin-top: 20px;
        }

        .product-card {
            margin-bottom: 20px;
        }

        .product-img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container product-container">
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                // Salida de los datos de cada fila
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card product-card">';
                    echo '<img src="../IMG/' . $row["imagen_producto"] . '" class="card-img-top product-img" alt="' . $row["nombre_producto"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["nombre_producto"] . '</h5>';
                    echo '<p class="card-text">' . $row["descripcion_producto"] . '</p>';
                    echo '<p class="card-text">Precio: $' . $row["precio_producto"] . '</p>';
                    echo '<p class="card-text">Cantidad disponible: ' . $row["cantidad_producto"] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No hay productos disponibles.";
            }
            $conn->close();
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>