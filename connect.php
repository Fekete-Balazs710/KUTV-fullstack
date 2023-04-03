<?php

	//Team data
	//Database table: csapat(Csapatnév, Jelszó, Regisztr_időpont, IskolaID, Email_cim)
	$teamname = $_POST['teamname'];
	$password = $_POST['password'];
	$teamRegDate = date("Y-m-d H:i:s");

	//echo $teamname."<br>";

	//Teacher
	//Database table: irányitó_tanár(Vezeték_név, Keresztnév, Telefonszám, Email_cim)
	$teacherFirstname = $_POST['teacherFirstname'];
	$teacherLastname = $_POST['teacherLastname'];
	$teachertel = $_POST['teachertel'];
	$teacheremail = $_POST['teacheremail'];

	//School
	$iskola_nev = $_POST['iskola_nev'];

	//echo $iskola_nev[1]."<br>";

	//1. team member
	$memberFirstName1 = $_POST['memberFirstName1'];
	$memberLastName1 = $_POST['memberLastName1'];
	$memberSpec1 = $_POST['memberSpec1'];
	$memberClass1 = $_POST['memberClass1'];
	$memberEmail1 = $_POST['memberEmail1'];
	$memberTel1 = $_POST['memberTel1'];

	//2. team member
	$memberFirstName2 = $_POST['memberFirstName2'];
	$memberLastName2 = $_POST['memberLastName2'];
	$memberSpec2 = $_POST['memberSpec2'];
	$memberClass2 = $_POST['memberClass2'];
	$memberEmail2 = $_POST['memberEmail2'];
	$memberTel2 = $_POST['memberTel2'];

	//3. team member
	$memberFirstName3 = $_POST['memberFirstName3'];
	$memberLastName3 = $_POST['memberLastName3'];
	$memberSpec3 = $_POST['memberSpec3'];
	$memberClass3 = $_POST['memberClass3'];
	$memberEmail3 = $_POST['memberEmail3'];
	$memberTel3 = $_POST['memberTel3'];

	//4. team member
	$memberFirstName4 = $_POST['memberFirstName4'];
	$memberLastName4 = $_POST['memberLastName4'];
	$memberSpec4 = $_POST['memberSpec4'];
	$memberClass4 = $_POST['memberClass4'];
	$memberEmail4 = $_POST['memberEmail4'];
	$memberTel4 = $_POST['memberTel4'];


	//Database connection
	$conn = new mysqli('localhost', 'root', '', 'kütv');

	if($conn -> connect_error) {
		die('Connection failed: '.$conn->connect_error);
	} else {
		//echo "Connection was successfull!"."<br>";

		//insert into iranyito_tanar
		$sql_insert_tanar = "INSERT INTO irányitó_tanár VALUES('$teacherFirstname','$teacherLastname','$teachertel', '$teacheremail')";
        if($conn -> query($sql_insert_tanar) === TRUE){
            //echo "Tanar Record Inserted Successfully!"."<br>";
        }else{
            echo "Unable to Insert Data"."<br>";
        }

		//insert into csapat
		$sql_insert_csapat = "INSERT INTO csapat VALUES('$teamname','".md5($password)."','$teamRegDate', '$iskola_nev[1]', '$teacheremail', '0')";
        if($conn -> query($sql_insert_csapat) === TRUE){
            //echo "Csapat Record Inserted Successfully!"."<br>";
        }else{
            echo "Unable to Insert Data"."<br>";
        }

		//insert into diak: member1	
		
		$sql_insert_diak1 = "INSERT INTO diák VALUES('$memberFirstName1','$memberLastName1','$memberEmail1','$memberTel1','$memberClass1','$teamname')";
        if($conn -> query($sql_insert_diak1) === TRUE){
            //echo "Diak1 Record Inserted Successfully!"."<br>";
        }else{
            echo "Unable to Insert Data"."<br>";
        }

        //insert into diak: member2	
		
		$sql_insert_diak2 = "INSERT INTO diák VALUES('$memberFirstName2','$memberLastName2','$memberEmail2','$memberTel2','$memberClass2','$teamname')";
        if($conn -> query($sql_insert_diak2) === TRUE){
            //echo "Diak2 Record Inserted Successfully!"."<br>";
        }else{
            echo "Unable to Insert Data"."<br>";
        }

        //insert into diak: member3	
		
		$sql_insert_diak3 = "INSERT INTO diák VALUES('$memberFirstName3','$memberLastName3','$memberEmail3','$memberTel3','$memberClass3','$teamname')";
        if($conn -> query($sql_insert_diak3) === TRUE){
            //echo "Diak3 Record Inserted Successfully!"."<br>";
        }else{
            echo "Unable to Insert Data"."<br>";
        }

        //insert into diak: member4	
		
		$sql_insert_diak4 = "INSERT INTO diák VALUES('$memberFirstName4','$memberLastName4','$memberEmail4','$memberTel4','$memberClass4','$teamname')";
        if($conn -> query($sql_insert_diak4) === TRUE){
            //echo "Diak4 Record Inserted Successfully!"."<br>";
        }else{
            echo "Unable to Insert Data"."<br>";
        }
        

		/*$stmt = $conn->prepare("insert into diák(Vezetéknév, Keresztnév, Email_cim, Telefonszám, Évfolyam, Csapatnév) values (?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $memberLastName1, $memberFirstName1, $memberEmail1, $memberTel1, $memberClass1, $teamname);
		$stmt->execute();
		echo "Diak hozzáadva...";
		$stmt->close();
		$conn->close();
	*/
		$conn -> close();

		}

		//PHP registration info email

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'phpmailer/src/Exception.php';
		require 'phpmailer/src/PHPMailer.php';
		require 'phpmailer/src/SMTP.php';

		
  		$mail = new PHPMailer(true);

  		$mail->isSMTP();
  		$mail->Host = 'smtp.gmail.com';
  		$mail->SMTPAuth = true;
  		$mail->Username = 'fekete.balazs710@gmail.com';
  		$mail->Password = 'usniqglkbhesicnf';
  		$mail->SMTPSecure = 'ssl';
  		$mail->Port = 465;


  		$mail->setFrom('fekete.balazs710@gmail.com');

      //ide kell a kapcsolattarto szemely email cime
  		$mail->addAddress('fekete.balazs710@gmail.com');

  		$mail->isHTML(true);

      $subject =  utf8_decode("KÜTV Verseny - Sikeres jelentkezés");
      $body =  utf8_decode("Gratulálunk ").utf8_decode($teamname).utf8_decode(" csapat!")."\r\n".utf8_decode("Sikeresen jelentkeztetek a KÜTV Versenyre");

  		$mail->Subject = $subject;
  		$mail->Body = $body;

  		$mail->send();

		
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KÜTV Verseny</title>
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
  <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background: rgb(30, 67, 86) !important;">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="index.php"><img src="assets/img/logo-FSEGA.png" alt="" class="img-fluid"></a>

        <a href="index.php"><img src="assets/img/kutv3.png" alt="" class="img-fluid" style="margin-left: 20px"></a>


         <!-- <h1 class="text-light"><a href="index.html"><span>KÜTV</span></a></h1> -->
      </div> 


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Kezdőoldal</a></li>
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

    <section class="why-us" data-aos="fade-up" date-aos-delay="200" style="padding-top: 25rem !important; padding-bottom: 20rem !important">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 d-flex flex-column justify-content-center p-5" style="align-items: center !important">
          
            <div class="icon-box" style="align-items: center !important">
              <div class="icon"><i class="bx bx-check text-success"></i></div>
            </div>
            <br>
            <h2 class="title" >Sikeres regisztráció!</h2>
            <p class="description">Sikeresen regisztráltál a 2023-as KÜTV versenyre.</p>
            <p class="description">Emailt küldtünk a regisztráció részleteiről.</p>
            <div><a href="login.php" class="btn-get-started animate__animated animate__fadeInUp" style="color: #198754 !important">Bejelentkezés</a></div>
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
        Designer: <a href="#">Fekete Balázs</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <a class="dark-mode d-flex align-items-center justify-content-center"><i class="bi bi-moon" onclick="changeCSS_toDark('assets/css/style_dark.css');"></i></a>

  <a class="light-mode d-flex align-items-center justify-content-center"><i class="bi bi-brightness-alt-high" onclick="changeCSS_toLight('assets/css/style.css');"></i></a>

  <!--<a class="light-mode d-flex align-items-center justify-content-center"><i class="bi bi-moon" onclick="changeCSS('assets/css/style_dark.css');"></i></a>-->

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