<?php 

require_once('db.php');

$query1 = "SELECT * FROM csapat";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT * FROM diák";
$result2 = mysqli_query($conn, $query2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
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
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<main id="main">

  <!-- ------------------------------------------------------ -->

  <!-- ------------------------------------------------------ -->

  <!-- ======= Service Details Section ======= -->
  <section class="service-details">
    <div class="container">

      <div class="section-title" style="margin-bottom: 6%">
        <h2>Admin page</h2>
      </div>

    </div>
  </section><!-- End Service Details Section -->

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="display-6 text-center">Regisztrált csapatok</h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered text-center">
              <tr class="bg-dark text-white">
                <td>Csapatnev</td>
                <td>Regisztracio idopontja</td>
                <td>IskolaID</td>
                <td>Email cim</td>
              </tr>
              <tr>
                <?php 

                while($row = mysqli_fetch_assoc($result1))
                {
                  ?>

                  <td><?php echo $row['Csapatnév'] ?></td>
                  <td><?php echo $row['Regisztr_időpont'] ?></td>
                  <td><?php echo $row['IskolaID'] ?></td>
                  <td><?php echo $row['Email_cim'] ?></td>

                  </tr>
                  <?php
                }
                ?>      
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<br>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="display-6 text-center">Regisztrált diákok</h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered text-center">
              <tr class="bg-dark text-white">
                <td>Vezetéknév</td>
                <td>Keresztnév</td>
                <td>Email_cim</td>
                <td>Telefonszám</td>
                <td>Évfolyam</td>
                <td>Csapatnév</td>
              </tr>
              <tr>
                <?php 

                while($row = mysqli_fetch_assoc($result2))
                {
                  ?>

                  <td><?php echo $row['Vezetéknév'] ?></td>
                  <td><?php echo $row['Keresztnév'] ?></td>
                  <td><?php echo $row['Email_cim'] ?></td>
                  <td><?php echo $row['Telefonszám'] ?></td>
                  <td><?php echo $row['Évfolyam'] ?></td>
                  <td><?php echo $row['Csapatnév'] ?></td>

                  </tr>
                  <?php
                }
                ?>      
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</main><!-- End #main -->
<br>
<br>
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

<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
  function readURL(input) {
    if (input.files && input.files[0]) {

      var reader = new FileReader();

      reader.onload = function(e) {
        $('.image-upload-wrap').hide();

        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();

        $('.image-title').html(input.files[0].name);
      };

      reader.readAsDataURL(input.files[0]);

    } else {
      removeUpload();
    }
  }

  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
  });

</script>

</body>

</html>