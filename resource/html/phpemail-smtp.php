<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Thank you</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="Dinu Saran">
  <meta name="author" content="Dinu Saran">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Styles -->
  <link rel="stylesheet" href="assets/css/jquery.fullpage.css">
  <link rel="stylesheet" href="assets/css/ie.css">
</head>
<body class="fp-viewing-home" style="overflow: hidden; height: 100%; background-color: rgb(231, 76, 60);">

    <div id="fullpage" class="fullpage-wrapper">
        <div class="section" id="section0">
            <div class="intro" style="padding-top: 20%">                
<?php


    if(isset($_POST['submit'])){
    $to = "staytunedwithdinu@gmail.com"; // this is your Email address
    $from = $_POST['youremail']; // this is the sender's Email address
    $yourname = $_POST['yourname'];
    $phone = $_POST['phone'];


/**
 * This example shows how to use POP-before-SMTP for authentication.
 */

require 'PHPMailer/PHPMailerAutoload.php';

//Authenticate via POP3.
//After this you should be allowed to submit messages over SMTP for a while.
//Only applies if your host supports POP-before-SMTP.
$pop = POP3::popBeforeSmtp('mx1.hostinger.in', 110, 30, 'love@dinusaran.com', 'Wife@836', 1);

//Create a new PHPMailer instance
//Passing true to the constructor enables the use of exceptions for error handling
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    //Set the hostname of the mail server
    $mail->Host = "mx1.hostinger.in";
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 2525;
    //Whether to use SMTP authentication
    $mail->SMTPAuth = false;
    //Set who the message is to be sent from
    $mail->setFrom('staytunedwithdinu@gmail.com', 'Dinesh Selvaraj and Saranya Rajendran');
    //Set an alternative reply-to address
    $mail->addReplyTo('staytunedwithdinu@gmail.com', 'Dinesh Selvaraj and Saranya Rajendran');
    //Set who the message is to be sent to
    $mail->addAddress($from, 'me');
    //Set the subject line
    $mail->Subject = 'PHPMailer POP-before-SMTP test';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //and convert the HTML into a basic plain-text alternative body
    $mail->msgHTML(file_get_contents('templete2.html'), dirname(__FILE__));
    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //send the message
    //Note that we don't need check the response from this because it will throw an exception if it has trouble
    $mail->send();
    echo "Message sent!";
} catch (phpmailerException $e) {
    //Pretty error messages from PHPMailer
    // echo $e->errorMessage(); 
    echo "<p>Mailer Error " . $mail->ErrorInfo . "</p><p>Try again later<p/><a class='buttons' href='home.html'>Go Home</a>";
} catch (Exception $e) {
    //Boring error messages from anything else!
    // echo $e->getMessage(); 
    echo "<p>Thank you " . $yourname . "</p><a class='buttons' href='home.html'>Go Home</a>";
}

}
?>

</div>
        </div>
    </div>

    
</body>
</html>