<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KÜTV Verseny - Jelszó</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/kutv3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" id="light">
  <link rel="stylesheet alternate" href="assets/css/style_dark.css"  id="dark"  title="Dark">

</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

     <div class="logo">
      <a href="index.php"><img src="assets/img/logo-FSEGA.png" alt="" class="img-fluid"></a>

      <a href="index.php"><img src="assets/img/kutv3.png" alt="" class="img-fluid" style="margin-left: 20px"></a>


      <!-- <h1 class="text-light"><a href="index.html"><span>KÜTV</span></a></h1> -->
    </div> 


    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="index.php">Kezdőoldal</a></li>
        <li><a href="about.php">A versenyről</a></li>
        <li><a href="services.php">Hírek</a></li>
        <li><a href="portfolio.php">Versenyszabályzat</a></li>
        <li><a href="team.php">FAQ</a></li>
        <li class="dropdown"><a href="contact.php"><span>Elérhetőségek</span></a>
        </li>
        <li><a href="login.php" class="btn-menu animate__animated">Bejelentkezés</a></li>
        <li><a href="registration.php" class="btn-menu animate__animated">Regisztráció</a></li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<main id="main">

<div class="py-5">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
  <div class="card">

    <div class="card-header">
      <h5>Jelszó megváltoztatása</h5>
    </div>

    <div class="card-body p-4">

      <form action="password-reset-code.php" method="post">

        <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])) {
            echo $_GET['token'];
          } ?>"></input>

        <div class="form-group mb-3">

          <label>Email cím</label>
          <input type="email" name="email" class="form-control" value="<?php if(isset($_GET['email'])) {
            echo $_GET['email'];
          } ?>"></input>

        </div>


        <div class="form-group mb-3">

          <label>Új jelszó</label>
          <input type="text" name="new_password" class="form-control"></input>

        </div>

        <div class="form-group mb-3">

          <label>Új jelszó megerősítése</label>
          <input type="text" name="confirm_password" class="form-control"></input>

        </div>

        <div class="form-group mb-3">

          <button type="submit" name="password_update" class="btn btn-primary w-100">Küldés</button>

        </div>



      </form>

    </div>

  </div>
</div>
</div>
</div>
</div>
</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<a class="dark-mode d-flex align-items-center justify-content-center"><i class="bi bi-moon" onclick="changeCSS_toDark('assets/css/style_dark.css');"></i></a>

<a class="light-mode d-flex align-items-center justify-content-center"><i class="bi bi-brightness-alt-high" onclick="changeCSS_toLight('assets/css/style.css');"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/form_validation.js"></script>

</body>

</html>