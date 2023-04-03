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

  <div class="container" style="padding-top: 20rem; padding-bottom: 20rem">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">



        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">

            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-6 d-none d-lg-block bg-password-image">

                <div class="p-5">
                  
                  <img src="assets/img/password.jpg"
          class="img-fluid" alt="Sample image">
                  
                  
                </div>
              </div>

              <div class="col-lg-6">

                <div class="p-5">
                  <div class="text-center">
                    <br>
                    <br>
                    <br>
                    <h1 class="h4 text-gray-900 mb-2">Elfelejtetted a jelszavad?</h1>
                    <p class="mb-4">Írd be az email címed és küldünk egy linket, amelyen kicserélheted a jelszavad.</p>

                    <form class="user" action="password-reset-code.php" method="POST">
                      <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user"
                        id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Email cím" required>
                      </div>

                      <div class="mt-4 pt-2">
                        <input class="btn btn-primary btn-lg" type="submit" value="Jelszó visszaállítása" name="password-reset-link" />
                      </div>

                    </form>
                  </div>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="registration.php">Regisztráció</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">Van már felhasználód? Jelentkezz be!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Hasznos linkek</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php">Kezdőoldal</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="about.php">A versenyről</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="services.php">Hirek</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php">Versenyszabályzat</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="team.php">FAQ</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Jelentkezés</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php">Jelentkezési feltételek</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php">Csapat összeállitása</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php">Esettanulmány feladat</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php">Határidő</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php">Osztályozás</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Elérhetőségek</h4>
          <p>
            Románia, Kolozs megye <br>
            Kolozsvár, Teodor Mihali utca, 58-60, 400591<br>
            <br>
            <strong>Telefonszám:</strong> 0264418652<br>
            <strong>Email:</strong> kutv@gmail.com<br>
          </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h3>Közösségi oldalaink</h3>
          <p>Kövess be minket közösségi oldalainkon. Kérdésed lenne? Bármelyik közösségi oldalunkon írhatsz nekünk.</p>
          <div class="social-links mt-3">
            <a href="https://www.facebook.com/bbte.kozgaz" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/bbte.kozgaz/?hl=en" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
            <a href="https://www.linkedin.com/company/ubb-fsega/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.tiktok.com/@bbtekozgaz" class="twitter" target="_blank"><i class="bx bxl-tiktok"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>KÜTV</span></strong>. Minden jog fenntarva.
    </div>
    <div class="credits">
      Designer: <a href="#">Fekete Balázs</a>
    </div>
  </div>
</footer><!-- End Footer -->

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