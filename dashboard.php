<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
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

        <li><a href="login.php" class="btn-menu animate__animated" href="logout.php">Kijelentkezés</a></li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<main id="main">

  <!-- ------------------------------------------------------ -->

  <!-- ------------------------------------------------------ -->

  <section class="advert">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="section-title" style="margin-bottom: 6%">
          <h2>Üdv, <?php echo $_SESSION['teamname'];?></h2>
          <p>Feltöltési határidő: 2023. március 29.</p>
          <h4>Hátralévő idő:</h4>
          <div id="clockdiv">
            <div>
              <span class="days"></span>
              <div class="smalltext">Nap</div>
            </div>
            <div>
              <span class="hours"></span>
              <div class="smalltext">Óra</div>
            </div>
            <div>
              <span class="minutes"></span>
              <div class="smalltext">Perc</div>
            </div>
            <div>
              <span class="seconds"></span>
              <div class="smalltext">Másodperc</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>

  <div class="section-title">
    <h2>Megoldás feltöltése</h2>
  </div>

  <section class="why-us" data-aos="fade-up" date-aos-delay="200">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 d-flex flex-column justify-content-center p-5" style="align-items: center !important">

          <form method="post" enctype="multipart/form-data" >



            <div class="col-md-12 mb-4">
              <div class="form-outline">
                <label class="form-label" for="title">Megoldás címe</label>
                <input type="text" class="form-control form-control-lg" name="title" required/>
              </div>
            </div>

            <div class="col-md-12 mb-4">
              <div class="form-outline">
                <label class="form-label" for="title">Fájl</label>
                <input type="File" class="form-control form-control-lg" name="file" required/>
              </div>
            </div>



            <div class="col-lg-12 d-flex justify-content-center p-5">
              <input class="btn btn-primary btn-lg" type="submit" value="Küldés" name="submit"/>
            </div>

          </form>

    

        </div>
      </div>



    </section>

    <?php
          $servername='localhost';
          $username='root';
          $password='';
          $dbname = "kütv";
          $conn=mysqli_connect($servername,$username,$password,"$dbname");

          if(!$conn){
            die('Could not Connect MySql Server:' .mysql_error());
          }

          if(isset($_POST["submit"]))
          {

              $uploadOk = 1;

              $title = $_POST["title"];
          //$pname = rand(1000, 10000)."-".$_FILES["file"]["name"];
              $pname = $_SESSION['teamname']."-Megoldas-".$_FILES["file"]["name"];
              $tname = $_FILES["file"]["tmp_name"];
              $teamname = $_SESSION['teamname'];

              if ($_FILES["file"]["size"] > 5000000) {
                echo "  
                <script>
                alert('Sikertelen feltöltés: A megoldás fájl maximális mérete: 5000 kb');
                </script>
                ";
                $uploadOk = 0;
              } else {


                $uploads_dir = 'C:/xampp/htdocs/KÜTV_Weboldal/assets/team_presentations';

                move_uploaded_file($tname, $uploads_dir.'/'.$pname);

                $sql = "INSERT INTO teljesit(Csapatnév, Év, Megoldás) VALUES ('$teamname', 2023, '$pname')";
                



                if (mysqli_query($conn,$sql)) {
                  echo "
                  <script>
                  alert('Megoldás sikeresen feltöltve.');
                  </script> ";

                }
              }
            }
        

          ?>

<!-- ======= Service Details Section ======= -->
<section class="service-details">
  <div class="container">

    <div class="section-title" style="margin-bottom: 6%">
      <h2>Fejlődési lehetőségek</h2>
    </div>

    <div class="row">
      <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <a href="about.php"><img src="assets/img/service-details-1.png" alt="..."></a>
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="about.php">Személyes fejlődés</a></h5>
            <p class="card-text">A verseny lehetőséget ad személyes fejlődésedre a közgazdaság- és gazdálkodástudomány területein. Betekintést nyerhetsz a vállalatok hétköznapjaiba és valós problémáik megoldása által Te is részese lehetsz a vállalat fejlődésének.</p>
            <div class="read-more"><a href="about.php"><i class="bi bi-arrow-right"></i> Tudj meg többet!</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <a href="about.php"><img src="assets/img/service-details-2.jpg" alt="..."></a>
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="about.php">Networking lehetőségek</a></h5>
            <p class="card-text">A verseny támogatói, szervezői és zsűritagjai olyan oktatók, vállalkozók, befektetők és tanácsadók, akik számára fontos, hogy megtalálják az olyan tehetséges diákokat, akikkel a későbbiekben együtt tudnak dolgozni. Élj a lehetőséggel Te is!</p>
            <div class="read-more"><a href="about.php"><i class="bi bi-arrow-right"></i> Tudj meg többet!</a></div>
          </div>
        </div>

      </div>
      <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <a href="about.php"><img src="assets/img/service-details-3.jpg" alt="..."></a>
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="about.php">Értékes nyeremények</a></h5>
            <p class="card-text">Támogatóink által minden dobogós csapat értékes nyereményekben részesülhet, többek között pénzjutalomban, fesztiváljegyben, utalványokban, ajándéktárgyakban és nem utolsó sorban az egyetemi karrier kezdetének biztositásában.</p>
            <div class="read-more"><a href="about.php"><i class="bi bi-arrow-right"></i> Tudj meg többet!</a></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Service Details Section -->

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