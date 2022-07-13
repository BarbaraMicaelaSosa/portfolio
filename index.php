<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio</title>

    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="images/logo-bs.jpeg">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center maximo">
                <a href="proyectos.html"><img src="images/cohete.svg" class="cohete" alt=""></a>
            </div>
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home mb-4">
                    <p class="px-0 py-0">Bienvenido a mi sitio web sobre desarrollo de sistemas</p>
                </div>
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn shadow">Conocé mis proyectos</a>
            </div>
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