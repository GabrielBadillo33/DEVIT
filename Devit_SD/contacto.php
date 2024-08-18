<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Contáctanos</title>
    <style>
        /* Estilo del cuerpo de la página */
        body {
            background: linear-gradient(to bottom, #ffffff, #000000);
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Estilo de la barra de navegación */
        .navbar {
            background: linear-gradient(to right, #000000, #ffffff);
        }

        .navbar-nav {
            flex-direction: row;
        }

        .nav-item {
            margin: 0 10px;
        }

        .nav-link {
            color: #ffffff !important;
        }

        .nav-link:hover {
            color: #000000 !important;
        }

        /* Estilo del contenedor del formulario */
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

        /* Estilo del footer */
        footer {
            background: linear-gradient(to right, #000000, #ffffff);
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

        /* Estilo del botón de WhatsApp */
        .whatsapp-button {
            display: flex;
            align-items: center;
            background-color: #25D366;
            color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px 20px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
            margin-top: 20px;
            /* Espacio entre el formulario y el botón de WhatsApp */
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
        }

        .whatsapp-button:hover {
            background-color: #1ebe5f;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .whatsapp-button i {
            font-size: 20px;
            margin-right: 10px;
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
                    <h2 class="text-center">Formulario de contacto</h2>
                    <form action=""> <!-- Recuerda poner la acción para enviar los datos del formulario -->
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="mensaje" placeholder="Envía tu mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar mensaje</button>
                        <!-- Botón de WhatsApp dentro del formulario -->
                        <a href="https://wa.me/5626765540" class="whatsapp-button" target="_blank">
                            <i class="fab fa-whatsapp"></i> Contáctanos
                        </a>
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

    <!-- FontAwesome para el ícono de WhatsApp -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>