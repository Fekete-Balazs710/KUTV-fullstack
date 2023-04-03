<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bejelentkezés</title>
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


<?php
    $conn = new mysqli("localhost","root","","kütv");

    if ($conn -> connect_error){
        echo "Error: Could not connect".$conn -> connect_error;
        exit();
    }
    session_start();

    // When form submitted, check and create user session.
    if (isset($_POST['teamname'])) {
        $username = stripslashes($_REQUEST['teamname']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `csapat` WHERE Csapatnév='$username'
                     AND Jelszó='" . md5($password) . "'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['teamname'] = $username;
            // Redirect to user dashboard page
            header("Location: /KÜTV_Weboldal/dashboard.php");
        } else {
          echo "<script>
    alert('Helytelen felhasználónév vagy jelszó.');
    </script>";
        }
    }
?>

<section class="vh-80" style="padding-bottom:10% !important; padding-top:10% !important;" id="login">
  <div class="container-fluid h-custom container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="assets/img/login-01.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h3>Bejelentkezés</h3>

        <form method="post" name="login">
    
          <br>
          <!-- Name input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="teamname">Csapatnév</label>
            <input type="text" id="teamname" class="form-control form-control-lg"
              placeholder="Írd be a csapatnevet" name="teamname" required/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="password">Jelszó</label>
            <input type="password" id="password" class="form-control form-control-lg"
              placeholder="Írd be a jelszavad" name="password" required/>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Emlékezz rám
              </label>
            </div>
            <a href="forgotpassword.php" class="text-body">Elfelejtetted a jelszavad?</a>
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">Bejelentkezés</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Nincs fiókod? <a href="registration.php"
                class="link-danger">Regisztrálj</a></p>
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

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

</body>

</html>