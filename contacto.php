<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto</title>
    
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="images/logo-bs.jpeg">

</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="sobre-mi.html">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="proyectos.html">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active px-4 py-1" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                    <a class="btn-cv">Descargar mi CV <i class="fa-solid fa-download"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 col-sm-6 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me contactes enviándome un mensaje o bien por Whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Email"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                            placeholder="Escribe aquí tu mensaje"></textarea>
                    </div>
                    <button type=submit id=btnEnviar name="btnEnviar" class="btn">ENVIAR</button>
            </div>
            </form>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <a href="https:/api.Whatsapp.com/send?phone=11227582" targer="_blanck"><i
                    class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3 mt-5 pb-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <div class="col-sm-3 mt-5 pb-3 suite">
                Sponsor <a href="https://depcsuite.com" class="red">DePCsuite</a>
            </div>

            <div class="col-sm-3 mt-5 pb-3">
                <a href="mailto:sosabarbaram@gmail.com" class="casilla">sosabarbaram@gmail.com</a>
            </div>
        </div>
    </footer>
</body>
</html>