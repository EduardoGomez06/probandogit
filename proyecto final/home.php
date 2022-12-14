<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ./login/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Best Brand - Smart bissnes</title>
        <link rel="icon" type="image/x-icon" href="assets/BBrand.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Best Brand.</span>
                <span class="site-heading-lower">Tu marca. Tu negocio.</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Best Brand</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="home.php">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="nosotros.php">Sobre nosotros</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="planes.php">Productos</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="./contactanos/contact.html">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <center><h1 class="my-5" color="solid-blue" >Hola! , <b ><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenido a tu espacio.</h1></center>

        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="./assets/img/intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Conviertete</span>
                            <span class="section-heading-lower">Haz que todos te vean</span>
                        </h2>
                        <p class="mb-3">Te sientes invisible frente a tus competidores, seguro que tenemos una solucion para ti!.
                            envianos un mensaje pronto te contestaremos
                        </p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="./contactanos/contact.html">Contactar!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Lo prometido</span>
                                <span class="section-heading-lower">Para ti</span>
                            </h2>
                            <p class="mb-0">Si lo que quieres es impulsar o convertir en tendencia tu negocio, marca o empresa visita nuestra seccion de planes, en donde te informamos todo lo que podemos hacer por ti..... todo lo que necesitas!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Best Brand 2022</p></div>

            <a href="./login/reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
        <a href="./login/logout.php" class="btn btn-danger ml-3">Cerrar sesion</a>

        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
