<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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

        .form-container {
            background-color: #343a40;
            padding: 20px;
            border-radius: 8px;
            color: #ffffff;
            margin-top: 40px;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #495057;
            color: #ffffff;
            border: none;
            border-radius: 4px;
        }

        .form-control::placeholder {
            color: #ffffff;
        }

        .btn-primary {
            background-color: #ffffff;
            color: #000000;
            border: none;
        }

        .btn-primary:hover {
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center">Inicio de Sesión</h2>
                    <form action="./PHP/login.php" method="post">
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
