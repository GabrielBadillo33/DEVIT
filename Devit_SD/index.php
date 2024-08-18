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
    <title>Galería de Imágenes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #000000);
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: linear-gradient(to right, #000000, #ffffff);
            /* Degradado negro a blanco */
        }

        .navbar-nav {
            flex-direction: row;
        }

        .nav-item {
            margin: 0 10px;
            /* Espacio entre los elementos de la nav */
        }

        .nav-link {
            color: #ffffff !important;
            /* Color blanco para los enlaces de la navbar */
        }

        .nav-link:hover {
            color: #000000 !important;
            /* Color negro en hover para los enlaces de la navbar */
        }

        .gallery-container {
            padding: 40px 0;
            flex: 1;
            /* Asegura que el contenedor de la galería tome el espacio disponible */
        }

        .gallery-item {
            margin-bottom: 20px;
        }

        .card {
            background-color: #343a40;
            /* Fondo oscuro para las tarjetas */
            border: none;
            /* Sin bordes en las tarjetas */
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            color: #ffffff;
        }

        .btn-custom {
            background-color: #ffffff;
            color: #000000;
            border: none;
            margin-top: 10px;
        }

        .btn-custom:hover {
            background-color: #f8f9fa;
            color: #000000;
        }

        footer {
            background: linear-gradient(to right, #000000, #ffffff);
            /* Degradado negro a blanco */
            padding: 20px 0;
            color: #ffffff;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

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

    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.php">Regístrate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sesion.php">Inicio de sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container product-container">
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                // Salida de los datos de cada fila
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card product-card">';
                    echo '<img src="IMG/' . $row["imagen_producto"] . '" class="card-img-top product-img" alt="' . $row["nombre_producto"] . '">';
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



    <footer>
        <div class="container">
            <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>