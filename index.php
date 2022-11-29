<!DOCTYPE html>
<html lang="es">

<head>

<?php include 'templates/head_.php';?>  

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <?php include 'templates/header_.php';?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Francisco Torres Venegas</h1>
            <p>Soy <span class="typed" data-typed-items="Desarrollador Web"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <?php include 'templates/about_.php';?>

        <?php include 'templates/skills_.php';?>

        <?php include 'templates/resume_.php';?>

        <?php include 'templates/portfolio_.php';?>

        <?php include 'templates/contact_.php';?>

        <?php include 'templates/footer_.php';?>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <?php include 'templates/scripts_.php';?>

</body>

</html>