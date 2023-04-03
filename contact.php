<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elérhetőségek</title>
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

<?php 

iconv_set_encoding("internal_encoding", "UTF-8");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'fekete.balazs710@gmail.com';
  $mail->Password = 'usniqglkbhesicnf';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;


  $mail->setFrom('fekete.balazs710@gmail.com');

  $mail->addAddress($_POST["email"]);

  $mail->isHTML(true);


  $mail->Subject = utf8_decode($_POST["subject"]);
  $mail->Body = utf8_decode($_POST["message"]);

  $mail->send();

  echo "  
    <script>
    alert('Email sikeresen elküldve');
    </script>
  ";
}

?>

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
          <li><a class="active " href="contact.php"><span>Elérhetőségek</span></a>
          </li>
          <li><a href="login.php" class="btn-menu animate__animated">Bejelentkezés</a></li>
          <li><a href="registration.php" class="btn-menu animate__animated">Regisztráció</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->

<section class="contactpage_header">
  <div class="container">
    <div class="row" data-aos="fade-up">
    <div class="section-title" style="margin-bottom: 6%">
          <h2>Elérhetőségek</h2>
        </div>
  </div>
</div>
</section>

<section class="services">
      <div class="container">

      
        <div class="row">
 
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <a href="https://www.facebook.com/bbte.kozgaz" target="_blank">
            <div class="icon-box icon-box-blue">
              <div class="icon" style="margin-top: 15px"><i class="bx bi-facebook"></i></div>
              <h4 class="title"><a href="https://www.facebook.com/bbte.kozgaz" target="_blank">Facebook</a></h4>
              <p class="description" id="contact_link_logo">At vero eos et accusamus et iusto</p>
            </div>
          </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <a href="https://www.instagram.com/bbte.kozgaz/?hl=en" target="_blank">
            <div class="icon-box icon-box-blue">
              <div class="icon" style="margin-top: 15px"><i class="bx bi-instagram"></i></div>
              <h4 class="title"><a href="https://www.instagram.com/bbte.kozgaz/?hl=en" target="_blank">Instagram</a></h4>
              <p class="description" id="contact_link_logo">At vero eos et accusamus et iusto</p>
            </div>
          </a>
          </div>


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <a href="https://www.linkedin.com/company/ubb-fsega/" target="_blank">
            <div class="icon-box icon-box-blue">
              <div class="icon" style="margin-top: 15px"><i class="bx bi-linkedin"></i></div>
              <h4 class="title"><a href="https://www.linkedin.com/company/ubb-fsega/" target="_blank">LinkedIn</a></h4>
              <p class="description" id="contact_link_logo">At vero eos et accusamus et iusto</p>
            </div>
          </a>
          </div>


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <a href="https://www.tiktok.com/@bbtekozgaz" target="_blank">
            <div class="icon-box icon-box-blue">
              <div class="icon" style="margin-top: 15px"><i class="bx bi-tiktok"></i></div>
              <h4 class="title"><a href="https://www.tiktok.com/@bbtekozgaz" target="_blank">TikTok</a></h4>
              <p class="description" id="contact_link_logo">At vero eos et accusamus et iusto</p>
            </div>
          </a>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Címünk</h3>
                  <p>Kolozsvár, Teodor Mihali utca, 58-60, 400591</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email-címünk</h3>
                  <p>kutv@gmail.com<br>fsega@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telefonszámunk</h3>
                  <p>+0264418652<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="contact.php" method="post" role="form" class="phpcontactform">
              <div class="row">
                <h2>Írj nekünk bátran!</h2>
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Neved" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email címed" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Tárgy" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Üzenet" required></textarea>
              </div>
              <br>
              <div class="text-center"><button type="submit" name="send">Üzenet elküldése</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=fsega+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->


 <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Hasznos linkek</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Kezdőoldal</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">A versenyről</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Hirek</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Versenyszabályzat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="team.html">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Jelentkezés</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Jelentkezési feltételek</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Csapat összeállitása</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Esettanulmány feladat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Határidő</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Osztályozás</a></li>
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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
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