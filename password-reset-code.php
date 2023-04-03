<?php

include('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function send_password_reset($get_name, $get_email,$token)
{


	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'fekete.balazs710@gmail.com';
	$mail->Password = 'usniqglkbhesicnf';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;


	$mail->setFrom('fekete.balazs710@gmail.com');

    //$mail->addAddress($_POST["email"]);
	$mail->addAddress('fekete.balazs710@gmail.com');

	$mail->isHTML(true);


	$mail->Subject = utf8_decode('KÜTV - Jelszó visszaállitása');

	$email_template = "<h3>Az alabbi linkre kattintva megvaltoztathatod a jelszavad.</h3>
						<br/><br/>
						<a href='http://localhost/KÜTV_Weboldal/password-change.php?token=$token&email=$get_email'>Link</a>";

	$mail->Body = $email_template;

	$mail->send();

	header("Location: /KÜTV_Weboldal/forgotpassword-success.php");                    

}

if(isset($_POST['password-reset-link'])) {

	$email = mysqli_escape_string($conn, $_POST['email']);
	$token = md5(rand());

	$check_email = "SELECT Email_cim, Csapatnév FROM csapat WHERE Email_cim='$email' LIMIT 1";
	$check_email_run = mysqli_query($conn, $check_email);

	if(mysqli_num_rows($check_email_run) > 0)
	{
		$row = mysqli_fetch_array($check_email_run);
		$get_name = $row['Csapatnév'];
		$get_email = $row['Email_cim'];

		$update_token = "UPDATE csapat SET token='$token' WHERE Email_cim='$get_email' LIMIT 1";
		$update_token_run = mysqli_query($conn, $update_token);

		if($update_token_run)
		{

			send_password_reset($get_name, $get_email, $token);

			$_SESSION['status'] = "We emailed you a password reset link";
			//header("Location: forgotpassword.php");
		
			echo "Nincs ilyen email cím.";
		
			exit(0);

			echo $email;

		} else {
			$_SESSION['status'] = "Error: Token is not updated.";
		//header("Location: forgotpassword.php");
		
		echo "Nincs ilyen email cím.";
		
		exit(0);
		}





	} else {
		$_SESSION['status'] = "No Email found.";
		//header("Location: forgotpassword.php");
		
		echo "Nincs ilyen email cím.";
		
		exit(0);
	}

}

if(isset($_POST['password_update'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
	$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

	$token = mysqli_real_escape_string($conn, $_POST['password_token']);

	if(!empty($token))
	{

		if(!empty($email) && !empty($new_password) && !empty($confirm_password))
		{

			//Token is valid or not
			$check_token = "SELECT token FROM csapat WHERE token='$token' LIMIT 1";
			$check_token_run = mysqli_query($conn, $check_token);

			$new_password_md = md5($new_password);

			if(mysqli_num_rows($check_token_run) > 0)
			{

				if($new_password == $confirm_password)
				{

					$update_password = "UPDATE csapat SET Jelszó='$new_password_md' WHERE token='$token' LIMIT 1";
					$update_password_run = mysqli_query($conn, $update_password);

					if($update_password_run)
					{

						$_SESSION['status'] = "Sikeresen modosult a jelszo.";
						header("Location: password-change-success.php");
		
						//echo "Hiba: Minden adat kotelezo.";
		
						exit(0);

					}
					else 
					{
						$_SESSION['status'] = "Hiba: nem sikerult frissiteni a jelszot.";
						header("Location: password-change.php?token=$token&email=$email");
		
						//echo "Hiba: Minden adat kotelezo.";
		
						exit(0);
					}

				}
				else 
				{
					$_SESSION['status'] = "A megadott jelszavak nem egyeznek meg.";
					header("Location: password-change.php?token=$token&email=$email");
		
					//echo "Hiba: Minden adat kotelezo.";
		
					exit(0);
				}

			}
			else 
			{
				$_SESSION['status'] = "Hiba: Hibas token.";
				header("Location: password-change.php?token=$token&email=$email");
		
				//echo "Hiba: Minden adat kotelezo.";
		
				exit(0);
			}

		}
		else
		{
			$_SESSION['status'] = "Hiba: Minden adat kotelezo.";
		header("Location: password-change.php?token=$token&email=$email");
		
		//echo "Hiba: Minden adat kotelezo.";
		
		exit(0);
		}

	} 
	else 
	{
		$_SESSION['status'] = "Hiba: Nincs elerheto token";
		header("Location: password-change.php");
		
		//echo "Hiba: Nincs elerheto token";
		
		exit(0);
	}
}

?>
