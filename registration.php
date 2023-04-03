  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jelentkezés</title>
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
  $conn = new mysqli('localhost','root','','kütv');
  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
  }else{
    $iskola_query = "SELECT * FROM iskola ORDER BY IskolaNév";
    if($result = $conn -> query($iskola_query)){
      while($row = $result -> fetch_array()){
        $iskola_adatok[] = array($row['IskolaID'] => $row['IskolaNév']);
      };
    }
    $result -> free();
  }
  $conn -> close();




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

    <!-- ------------------------------------------------------ -->


    <!-- ------------------------------------------------------ -->

    <section class="registration_header" id="header_login">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="section-title" style="margin-bottom: 6%">
            <h2 style="color:white">KÜTV - Jelentkezés</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="gradient-custom" id="form">

      <div class="container py-5 h-100">

        <div class="row justify-content-center align-items-center h-100">

          <div class="col-12 col-lg-12 col-xl-7">

            <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
              <!-- ------------------------------------------------------ -->
              <div class="card-body p-6 p-md-5 registration-card">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Regisztrációs kérdőív</h3>

                <form action="connect.php" method="POST">

                  <h4 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-bottom: 1rem !important; margin-top: 3rem !important">Csapat</h4>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="teamname">Csapatnév</label>
                        <input type="text" id="teamname" class="form-control form-control-lg" name="teamname" required placeholder="pl. TheOnes" pattern="[A-Za-z]{1,32}" title="Nagy betűvel kezdődő név."/>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="password">Jelszó</label>
                        <input type="password" id="password" class="form-control form-control-lg" name="password" required placeholder="" title="Elvárások: Minimum 8 karakter, legalább 1 betű és legalább 1 szám." pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"/>
                      </div>
                    </div>

                  </div>

                  <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">Irányító tanár</h4>

                  <div class="row">
                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <label class="form-label" for="teacherFirstname">Irányító tanár családneve</label>
                        <input type="text" id="teacherFirstname" class="form-control form-control-lg" name="teacherFirstname" required title="Nagy betűvel kezdődő név."/>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <label class="form-label" for="teacherLastname">Irányító tanár keresztneve</label>
                        <input type="text" id="teacherLastname" class="form-control form-control-lg" name="teacherLastname" required title="Nagy betűvel kezdődő név."/>
                      </div>

                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <label class="form-label" for="teacheremail">Email cím</label>
                        <input type="email" id="teacheremail" class="form-control form-control-lg" name="teacheremail" required/>
                      </div>

                    </div>

                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <label class="form-label" for="teachertel">Telefonszám</label>
                        <input type="tel" id="teachertel" class="form-control form-control-lg" name="teachertel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required/>
                      </div>

                    </div>
                  </div>

                  <h4 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-bottom: 1rem !important; margin-top: 3rem !important">Iskola</h4>


                  <div class="row">

                    <div class="col-md-6 mb-4">

                      <div class="form-outline datepicker w-100">
                        <label class="form-label select-label">Iskola</label>
                        <select class="select form-control-lg" name="iskola_nev">
                          <option value="x" selected disabled>Iskola</option>
                          <?php 
                          foreach($iskola_adatok as $adatok){
                            foreach($adatok as $x => $x_value){
                              echo "<option value='{".$x."}'>".$x_value."</option>"; 
                            }

                          }
                          ?>
                        </select>
                      </div>

                    </div>
                  </div>
                  <!-- ------------------------------------------------------------------------------------  -->          
                </div>
              </div>
              <br>

              <!-- ------------------------------------------------------------------------------------  -->
              <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
                <div class="card-body p-6 p-md-5 registration-card">
                  <!-- ------------------------------------------------------------------------------------  -->
                  <h4 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-bottom: 1rem !important; margin-top: 3rem !important">1. Csapattag</h4>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="memberFirstName1">Családnév (1. Csapattag)</label>
                        <input type="text" id="memberFirstName1" class="form-control form-control-lg" name="memberFirstName1" required title="Nagy betűvel kezdődő név."/>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="memberLastName1">Keresztnév (1. Csapattag)</label>
                        <input type="text" id="memberLastName1" class="form-control form-control-lg" name="memberLastName1" required title="Nagy betűvel kezdődő név."/>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="form-label select-label">Szak és évfolyam (1. Csapattag)</label>
                    <div class="col-md-6 mb-4 d-flex align-items-center">
                     <select class="select form-control-lg" name="memberSpec1">
                      <option value="1" disabled>Szak</option>
                      <option value="2">Matek-infó</option>
                      <option value="3">Bio-kémia</option>
                      <option value="4">Matek-fizika</option>
                      <option value="2">Társadalomtudomány</option>
                      <option value="3">Pedagógia</option>
                      <option value="4">Szakiskola</option>
                      <option value="4">Egyéb</option>
                    </select>
                  </div>

                  <div class="col-md-6 mb-4 d-flex align-items-center">
                   <select class="select form-control-lg" name="memberClass1">
                    <option value="1" disabled>Évfolyam</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>    
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="memberEmail1">Email cím (1. Csapattag)</label>
                    <input type="email" id="memberEmail1" class="form-control form-control-lg" name="memberEmail1" required/>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="memberTel1">Telefonszám (1. Csapattag)</label>
                    <input type="tel" id="memberTel1" class="form-control form-control-lg" name="memberTel1" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required/>
                  </div>
                </div>
              </div>
              <!-- ------------------------------------------------------------------------------------  -->
            </div>
          </div>
          <!-- ------------------------------------------------------------------------------------  -->
          <br>
          <!-- ------------------------------------------------------------------------------------  -->
          <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
            <div class="card-body p-6 p-md-5 registration-card">
              <!-- ------------------------------------------------------------------------------------  -->
              <h4 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-bottom: 1rem !important; margin-top: 3rem !important">2. Csapattag</h4>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="memberFirstName2">Családnév (2. Csapattag)</label>
                    <input type="text" id="memberFirstName2" class="form-control form-control-lg" name="memberFirstName2" required title="Nagy betűvel kezdődő név."/>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="memberLastName2">Keresztnév (2. Csapattag)</label>
                    <input type="text" id="memberLastName2" class="form-control form-control-lg" name="memberLastName2" required title="Nagy betűvel kezdődő név."/>
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="form-label select-label">Szak és évfolyam (2. Csapattag)</label>
                <div class="col-md-6 mb-4 d-flex align-items-center">
                 <select class="select form-control-lg" name="memberSpec2">
                  <option value="1" disabled>Szak</option>
                  <option value="2">Matek-infó</option>
                  <option value="3">Bio-kémia</option>
                  <option value="4">Matek-fizika</option>
                  <option value="2">Társadalomtudomány</option>
                  <option value="3">Pedagógia</option>
                  <option value="4">Szakiskola</option>
                  <option value="4">Egyéb</option>
                </select>
              </div>

              <div class="col-md-6 mb-4 d-flex align-items-center">
               <select class="select form-control-lg" name="memberClass2">
                <option value="1" disabled>Évfolyam</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>    
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <label class="form-label" for="memberEmail2">Email cím (2. Csapattag)</label>
                <input type="email" id="memberEmail2" class="form-control form-control-lg" name="memberEmail2" required/>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <label class="form-label" for="memberTel2">Telefonszám (2. Csapattag)</label>
                <input type="tel" id="memberTel2" class="form-control form-control-lg" name="memberTel2" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ------------------------------------------------------------------------------------  -->
      <br>
      <!-- ------------------------------------------------------------------------------------  -->
      <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
        <div class="card-body p-6 p-md-5 registration-card">
          <!-- ------------------------------------------------------------------------------------  -->
          <h4 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-bottom: 1rem !important; margin-top: 3rem !important">3. Csapattag</h4>

          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <label class="form-label" for="memberFirstName3">Családnév (3. Csapattag)</label>
                <input type="text" id="memberFirstName3" class="form-control form-control-lg" name="memberFirstName3" required  title="Nagy betűvel kezdődő név."/>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <label class="form-label" for="memberLastName3">Keresztnév (3. Csapattag)</label>
                <input type="text" id="memberLastName3" class="form-control form-control-lg" name="memberLastName3" required  title="Nagy betűvel kezdődő név."/>
              </div>
            </div>
          </div>

          <div class="row">
            <label class="form-label select-label">Szak és évfolyam (3. Csapattag)</label>
            <div class="col-md-6 mb-4 d-flex align-items-center">
             <select class="select form-control-lg" name="memberSpec3">
              <option value="1" disabled>Szak</option>
              <option value="2">Matek-infó</option>
              <option value="3">Bio-kémia</option>
              <option value="4">Matek-fizika</option>
              <option value="2">Társadalomtudomány</option>
              <option value="3">Pedagógia</option>
              <option value="4">Szakiskola</option>
              <option value="4">Egyéb</option>
            </select>
          </div>

          <div class="col-md-6 mb-4 d-flex align-items-center">
           <select class="select form-control-lg" name="memberClass3">
            <option value="1" disabled>Évfolyam</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>    
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="form-outline">
            <label class="form-label" for="memberEmail3">Email cím (3. Csapattag)</label>
            <input type="email" id="memberEmail3" class="form-control form-control-lg" name="memberEmail3" required/>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="form-outline">
            <label class="form-label" for="memberTel3">Telefonszám (3. Csapattag)</label>
            <input type="tel" id="memberTel3" class="form-control form-control-lg" name="memberTel3" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------------------------------------------------------------  -->
  <br>
  <!-- ------------------------------------------------------------------------------------  -->
  <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
    <div class="card-body p-6 p-md-5 registration-card">
      <!-- ------------------------------------------------------------------------------------  -->
      <h4 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-bottom: 1rem !important; margin-top: 3rem !important">4. Csapattag</h4>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="form-outline">
            <label class="form-label" for="memberFirstName4">Családnév (4. Csapattag)</label>
            <input type="text" id="memberFirstName4" class="form-control form-control-lg" name="memberFirstName4" required  title="Nagy betűvel kezdődő név."/>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="form-outline">
            <label class="form-label" for="memberLastName4">Keresztnév (4. Csapattag)</label>
            <input type="text" id="memberLastName4" class="form-control form-control-lg" name="memberLastName4" required  title="Nagy betűvel kezdődő név."/>
          </div>
        </div>
      </div>

      <div class="row">
        <label class="form-label select-label">Szak és évfolyam (4. Csapattag)</label>
        <div class="col-md-6 mb-4 d-flex align-items-center">
         <select class="select form-control-lg" name="memberSpec4">
          <option value="1" disabled>Szak</option>
          <option value="2">Matek-infó</option>
          <option value="3">Bio-kémia</option>
          <option value="4">Matek-fizika</option>
          <option value="2">Társadalomtudomány</option>
          <option value="3">Pedagógia</option>
          <option value="4">Szakiskola</option>
          <option value="4">Egyéb</option>
        </select>
      </div>

      <div class="col-md-6 mb-4 d-flex align-items-center">
       <select class="select form-control-lg" name="memberClass4">
        <option value="1" disabled>Évfolyam</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>    
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="memberEmail4">Email cím (4. Csapattag)</label>
        <input type="email" id="memberEmail4" class="form-control form-control-lg" name="memberEmail4" required/>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="memberTel4">Telefonszám (4. Csapattag)</label>
        <input type="tel" id="memberTel4" class="form-control form-control-lg" name="memberTel4" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required/>
      </div>
    </div>
  </div>

</div>
</div>
<!-- ------------------------------------------------------------------------------------  -->
<br>
<br>
<hr>         


<div class="container">

        <div class="row" data-aos="fade-up">
          <div class="section-title" style="margin-bottom: 6%">
            <input class="btn btn-primary btn-lg" type="submit" value="Küldés" />
          </div>
        </div>
      </div>


</form>
</div>

<!-- ------------------------------------------------------ -->


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
<script src="assets/js/form_validation.js"></script>

</body>

</html>