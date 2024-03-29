<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* New aliases. */
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

/* Composer autoload.php file includes all installed libraries. */
require 'C:\Users\M.S.B. B. Omisol\vendor\autoload.php';

/* If you installed league/oauth2-google in a different directory, include its autoloader.php file as well. */
// require 'C:\xampp\league-oauth2\vendor\autoload.php';

/* Set the script time zone to UTC. */
date_default_timezone_set('Etc/UTC');

/* Information from the XOAUTH2 configuration. */
$google_email = 'biverprojectfour@gmail.com';
$oauth2_clientId = '409169846432-ofogh3l2gpk20cul9lhrql6lm18ogaqh.apps.googleusercontent.com';
$oauth2_clientSecret = 'aSfw99MHhAgxppxVud_E0SBv';
$oauth2_refreshToken = '1/AQY011rm0S-N-uFcCgbjtAvhlCIAAd6mvanOg6nW9DU';

$mail = new PHPMailer(TRUE);

try {
   require_once("dbcontroller.php");
   $dbhandle = new DBcontroller();
   $query = "SELECT token FROM accounts where email=".$_POST['email']."";
   $token = $db_handle->runQuery($query);
   $mail->setFrom($google_email, 'BiVER Bot');
   $mail->addAddress($_POST['email'], 'Guest');
   $mail->Subject = 'Daily Reminder';
   $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activate.php?id=" . $token;

   $mail->Body = '
   <html>
   <head>
   <title> Activation Email </title>
   </head>
   <body>
   <h2> Welcome to BiVER! </h2>
   <p> To activate your account, click this <a href="'.$actual_link.'">"'.$actual_link.'" </a>
   </body>
   </html>
   ';
   $mail->isSMTP();
   $mail->Port = 587;
   $mail->SMTPAuth = TRUE;
   $mail->SMTPSecure = 'tls';
   
   /* Google's SMTP */
   $mail->Host = 'smtp.gmail.com';
   
   /* Set AuthType to XOAUTH2. */
   $mail->AuthType = 'XOAUTH2';
   
   /* Create a new OAuth2 provider instance. */
   $provider = new Google(
      [
         'clientId' => $oauth2_clientId,
         'clientSecret' => $oauth2_clientSecret,
      ]
   );
   
   /* Pass the OAuth provider instance to PHPMailer. */
   $mail->setOAuth(
      new OAuth(
         [
            'provider' => $provider,
            'clientId' => $oauth2_clientId,
            'clientSecret' => $oauth2_clientSecret,
            'refreshToken' => $oauth2_refreshToken,
            'userName' => $google_email,
         ]
      )
   );
   
   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}
?>