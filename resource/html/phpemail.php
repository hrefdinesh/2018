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
                    $subject = "Contact Details";
                    $subject2 = "Thank You.. dinusaran.com";

                    // $message = $yourname . " " . $phone . " wrote the following:" . "\n\n" . $_POST['message'];


                    $message = '<table id="container" align="center" cellpadding="0" cellspacing="0" style="width: 100%; margin:0; padding:0; background-color:#eeeeee;">
                        <tr>
                            <td style="padding:10px 20px;">
                                <table width="620" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; text-align:left; font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; line-height:15pt; color:#999999; margin:0 auto;">
                                    <tr>
                                        <td bgcolor="#FFFFFF"  height="5" style="font-size:2px; line-height:0px;" valign="top">
                                            <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0; line-height:0px;">
                                                <tr>
                                                    <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderTopLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                    <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                    <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderTopRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>                                               
                                </table>
                                <table width="620" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; text-align:left; font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; line-height:15pt; color:#999999; margin:0 auto;">
                                    
                                    <tr>
                                        <td bgcolor="#FFFFFF" style="padding:12px 20px 12px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15pt; color:#999999;">
                                            <table width="580" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0;">
                                                <tr>
                                                    <td width="300" valign="top"  style="padding:0 20px 0 0; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15pt; color:#999999;">
                                                        <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0; padding:0 0 10px 0;">
                                                            <tr>
                                                                <td width="100"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top"><img border="0" alt="Home:" style="padding:2px 6px 0 0;" height="7" src="http://dinusaran.com/email/arrow2.gif" width="7">Name </td>
                                                                <td width="180"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top">'. $yourname . '</td>
                                                            </tr>
                                                        </table>
                                                        <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0; padding:0 0 10px 0;">
                                                            <tr>
                                                                <td width="100"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top"><img border="0" alt="Home:" style="padding:2px 6px 0 0;" height="7" src="http://dinusaran.com/email/arrow2.gif" width="7">Email </td>
                                                                <td width="180"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top"><a href="mailto:'. $from .'">'. $from . '</a></td>
                                                            </tr>
                                                        </table>
                                                        <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0; padding:0 0 10px 0;">
                                                            <tr>
                                                                <td width="100"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top"><img border="0" alt="Home:" style="padding:2px 6px 0 0;" height="7" src="http://dinusaran.com/email/arrow2.gif" width="7">Phone </td>
                                                                <td width="180"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top">'. $phone . '</td>
                                                            </tr>
                                                        </table>
                                                        <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0; padding:0 0 10px 0;">
                                                            <tr>
                                                                <td width="100"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top"><img border="0" alt="Home:" style="padding:2px 6px 0 0;" height="7" src="http://dinusaran.com/email/arrow2.gif" width="7">Message </td>
                                                                <td width="180"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:1.333; color:#777777;" valign="top">'. $_POST['message']. '</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#FFFFFF"  height="5" style="font-size:2px; line-height:0px;" valign="bottom">
                                            <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0; line-height:0px;">
                                                <tr>
                                                    <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderBottomLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                    <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                    <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderBottomRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20" style="font-size:2px; line-height:2px;"><img alt="" height="20" src="http://dinusaran.com/email/shadow620.gif" width="620" border="0" style="display:block;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>';

                    $msg = '<table id="container" align="center" cellpadding="0" cellspacing="0" style="width: 100%; margin:0; padding:0; background-color:#eeeeee;">
                            <tr>
                                <td style="padding:10px 20px;">
                                    <table width="620" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; text-align:left; font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; line-height:15pt; color:#999999; margin:0 auto;">
                                        <tr>
                                            <td bgcolor="#FFFFFF"  valign="top">
                                            <img alt="image" height="260" src="http://dinusaran.com/email/banner2.jpg" width="620" border="0" align="left" vspace="0" hspace="0" style="display:block;"></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#FFFFFF" style="padding:15px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15pt; color:#999999;">
                                                <h1 style="padding:0; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:20pt; color:#39434d; font-weight:normal; margin-top:0; margin-bottom:0px !important;"><span style="font-style:italic; color:#2a8fbd;">Thank you</span><span style="font-style:italic;"> for Contact Us</span></h1>
                                                <h2 style="padding:0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:20pt; color:#000000; font-weight:normal; margin-top:10px; margin-bottom:0px !important;">Muhurtham</h2>
                                                <p style="margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:13px;">08-09-2016 7:45am to 8:30am</p>
                                                <h2 style="padding:0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:20pt; color:#000000; font-weight:normal; margin-top:10px; margin-bottom:0px !important;">Reception</h2>
                                                <p style="margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:13px;">08-09-2016 6:00am to 9:00am</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#FFFFFF"  height="5" style="font-size:2px; line-height:0px;" valign="bottom">
                                                <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0; line-height:0px;">
                                                    <tr>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderBottomLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                        <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderBottomRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20" style="font-size:2px; line-height:2px;"><img alt="" height="20" src="http://dinusaran.com/email/shadow620.gif" width="620" border="0" style="display:block;"></td>
                                        </tr>
                                    </table>
                                    <table width="620" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; text-align:left; font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; line-height:15pt; color:#999999; margin:0 auto;">
                                        <tr>
                                            <td bgcolor="#FFFFFF"  height="5" style="font-size:2px; line-height:0px;" valign="top">
                                                <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0; line-height:0px;">
                                                    <tr>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderTopLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                        <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderTopRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>                                               
                                    </table>
                                    <table width="620" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; text-align:left; font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; line-height:15pt; color:#999999; margin:0 auto;">                
                                        <tr>
                                            <td bgcolor="#FFFFFF" style="padding:12px 20px 12px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15pt; color:#999999;">
                                                <table width="580" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0;">
                                                    <tr>
                                                        <td width="180" valign="top"  style="padding:0 20px 0 0; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15pt; color:#999999;">
                                                            <table width="180" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0;">
                                                                <tr>
                                                                    <td valign="top" width="20" style="padding:0 0 0 0; line-height:100%;"><img border="0" alt="Home:" height="12" src="http://dinusaran.com/email/homeIcon.gif" width="11"></td>
                                                                    <td width="160"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:100%; color:#999999;" valign="top">
                                                                    <a href="http://dinusaran.com" style="border-bottom:1px #777777 dotted; text-decoration:none; color:#777777;">www.dinusaran.com</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" width="20" style="padding:2px 0 0 0; line-height:100%;"><img border="0" alt="http://dinusaran.com/email:" height="9" src="http://dinusaran.com/email/emailIcon.gif" width="12"></td>
                                                                    <td width="160"  style="padding:0; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:100%; color:#999999;" valign="top">
                                                                    <a href="mailto:staytunedwithdinu@gmail.com" style="border-bottom:1px #777777 dotted; text-decoration:none; color:#777777;">staytunedwithdinu@gmail.com</a></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td width="180" valign="top"  style="padding:0 20px 0 0; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15pt; color:#999999;">
                                                            <table width="180" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0;">
                                                                <tr>
                                                                    <td valign="top" width="16" style="padding:1px 0 0 1px; line-height:100%;"><img border="0" alt="Phone:" height="10" src="http://dinusaran.com/email/phoneIcon.gif" width="7"></td>
                                                                    <td width="160"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:100%; color:#777777;" valign="top">
                                                                    <a href="tel:9876543210">+91 9003645636</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td width="180" valign="top"  style="padding:0; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15pt; color:#999999;">
                                                            <table width="180" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0;">
                                                                <tr>
                                                                    <td width="32" style="padding:0 5px 0 0;">Groom</td>
                                                                    <td width="32" style="padding:0 5px 0 0;"><a href="https://www.facebook.com/dinesh.dinu.754" target="_blank"><img align="left" border="0" vspace="0" hspace="0" alt="Facebook" height="32" src="http://dinusaran.com/email/facebook.png" width="32"></a></td>
                                                                    <td width="32" style="padding:0 5px 0 0;">Bride</td>
                                                                    <td width="32" style="padding:0 5px 0 0;"><a href="https://www.facebook.com/saran.mylu" target="_blank"><img align="left" border="0" vspace="0" hspace="0" alt="Facebook" height="32" src="http://dinusaran.com/email/facebook.png" width="32"></a></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#FFFFFF"  height="5" style="font-size:2px; line-height:0px;" valign="bottom">
                                                <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0; line-height:0px;">
                                                    <tr>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderBottomLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                        <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="http://dinusaran.com/email/borderBottomRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20" style="font-size:2px; line-height:2px;"><img alt="" height="20" src="http://dinusaran.com/email/shadow620.gif" width="620" border="0" style="display:block;"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>';

                    // To send HTML mail, the Content-type header must be set
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From: Marriage Wishes <'.$from.'>' . "\r\n";

                    $headers2  = 'MIME-Version: 1.0' . "\r\n";
                    $headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers2 .= 'From: Thank you <'.$to.'>' . "\r\n";

                    mail($to,$subject,$message,$headers);
                    mail($from,$subject2,$msg,$headers2); // sends a copy of the message to the sender
                    echo "<p>Thank you " . $yourname . "</p>
                    <a class='buttons' href='home.html'>Go Home</a>";
                }
                ?>
            </div>
        </div>
    </div>

    
</body>
</html>

