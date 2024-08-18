<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Configura el fondo de la página con un degradado de blanco a negro */
        body {
            background: linear-gradient(to bottom, #ffffff, #000000);
            color: #ffffff;
            min-height: 100vh;
            /* Asegura que el cuerpo de la página tenga al menos el alto de la ventana */
            display: flex;
            flex-direction: column;
            /* Permite que el contenido se apile verticalmente */
        }

        /* Estilo para la barra de navegación con degradado de negro a blanco */
        .navbar {
            background: linear-gradient(to right, #000000, #ffffff);
        }

        /* Configura la dirección de los elementos de la barra de navegación en fila */
        .navbar-nav {
            flex-direction: row;
        }

        /* Establece el margen entre los elementos de la barra de navegación */
        .nav-item {
            margin: 0 10px;
        }

        /* Define el color de los enlaces en la barra de navegación */
        .nav-link {
            color: #ffffff !important;
        }

        /* Cambia el color de los enlaces al pasar el cursor sobre ellos */
        .nav-link:hover {
            color: #000000 !important;
        }

        /* Estilo del contenedor del formulario para que esté centrado y tenga fondo oscuro */
        .form-container {
            background-color: #343a40;
            /* Fondo oscuro para el contenedor del formulario */
            padding: 20px;
            /* Espaciado interno */
            border-radius: 8px;
            /* Bordes redondeados */
            color: #ffffff;
            /* Color del texto */
            margin-top: 40px;
            /* Espacio superior para separación */
        }

        /* Margen inferior del título del formulario */
        .form-container h2 {
            margin-bottom: 20px;
        }

        /* Estilo de los campos del formulario */
        .form-control {
            background-color: #495057;
            /* Fondo oscuro para los campos del formulario */
            color: #ffffff;
            /* Color del texto en los campos */
            border: none;
            /* Sin borde */
            border-radius: 4px;
            /* Bordes redondeados */
        }

        /* Color del texto del placeholder en los campos del formulario */
        .form-control::placeholder {
            color: #ffffff;
        }

        /* Estilo del botón primario */
        .btn-primary {
            background-color: #ffffff;
            /* Fondo blanco para el botón */
            color: #000000;
            /* Color del texto del botón */
            border: none;
            /* Sin borde */
        }

        /* Estilo del botón al pasar el cursor sobre él */
        .btn-primary:hover {
            background-color: #f8f9fa;
            /* Fondo blanco más claro */
            color: #000000;
            /* Color del texto */
        }

        /* Estilo del footer con degradado de negro a blanco, centrado y fijo en la parte inferior */
        footer {
            background: linear-gradient(to right, #000000, #ffffff);
            padding: 20px 0;
            /* Espaciado interno en la parte superior e inferior */
            color: #ffffff;
            /* Color del texto */
            text-align: center;
            /* Centra el texto dentro del footer */
            position: fixed;
            /* Fija el footer en la parte inferior */
            bottom: 0;
            /* Alinea el footer con el fondo de la ventana */
            width: 100%;
            /* Ancho completo de la ventana */
        }

        /* Alinea el contenido dentro del contenedor del footer */
        footer .container {
            display: flex;
            justify-content: center;
            /* Centra horizontalmente el contenido */
            align-items: center;
            /* Centra verticalmente el contenido */
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
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center">Formulario de Registro</h2>
                    <form action="./PHP/register.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
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