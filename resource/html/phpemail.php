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
</head>
<body class="fp-viewing-home" style="overflow: hidden; height: 100%; background-color: rgb(231, 76, 60);">

    <div id="fullpage" class="fullpage-wrapper">
        <div class="section" id="section0">
            <div class="intro" style="padding-top: 0%">
                <?php 
                    if(isset($_POST['submit'])){
                    $to = "staytunedwithdinu@gmail.com"; // this is your Email address
                    $from = $_POST['youremail']; // this is the sender's Email address
                    $yourname = $_POST['yourname'];
                    $winnerName = $_POST['formwinnerName'];
                    $subject = "Thank You.. dinusaran.com";
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
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderTopLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                        <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderTopRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
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
                                                                    <td width="100"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top"><img border="0" alt="Home:" style="padding:2px 6px 0 0;" height="7" src="https://raw.githubusercontent.com/hrefdinesh/email/master/arrow2.gif" width="7">Name </td>
                                                                    <td width="180"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top">'. $yourname . '</td>
                                                                </tr>
                                                            </table>
                                                            <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing:0; border-width:0; padding:0 0 10px 0;">
                                                                <tr>
                                                                    <td width="100"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top"><img border="0" alt="Home:" style="padding:2px 6px 0 0;" height="7" src="https://raw.githubusercontent.com/hrefdinesh/email/master/arrow2.gif" width="7">Email </td>
                                                                    <td width="180"  style="padding:0 0 10px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:100%; color:#777777;" valign="top"><a href="mailto:'. $from .'">'. $from . '</a></td>
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
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderBottomLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                        <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderBottomRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20" style="font-size:2px; line-height:2px;"><img alt="" height="20" src="https://raw.githubusercontent.com/hrefdinesh/email/master/shadow620.gif" width="620" border="0" style="display:block;"></td>
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
                                            <img alt="image" height="337" src="https://raw.githubusercontent.com/hrefdinesh/2018/master/teams/'. $winnerName . '.jpg" width="620" border="0" align="left" vspace="0" hspace="0" style="display:block;"></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#FFFFFF" style="padding:15px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15pt; color:#999999;">
                                                <h1 style="padding:0; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:20pt; color:#39434d; font-weight:normal; margin-top:0; margin-bottom:0px !important;">Dear <span style="font-style:italic; color:#2a8fbd;">'. $yourname . ',</span></h1>
                                                <h2 style="padding:0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:20pt; color:#000000; font-weight:normal; margin-top:10px; margin-bottom:0px !important;">You have predicted '. strtoupper($winnerName) . ' will win!</h2>
                                                <h1 style="padding:0; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:20pt; color:#39434d; font-weight:normal; margin-top:10px; margin-bottom:0px !important;"><span style="font-style:italic;">Thank you for the participation.</span></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#FFFFFF"  height="5" style="font-size:2px; line-height:0px;" valign="bottom">
                                                <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0; line-height:0px;">
                                                    <tr>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderBottomLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                        <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderBottomRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20" style="font-size:2px; line-height:2px;"><img alt="" height="20" src="https://raw.githubusercontent.com/hrefdinesh/email/master/shadow620.gif" width="620" border="0" style="display:block;"></td>
                                        </tr>
                                    </table>
                                    <table width="620" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; text-align:left; font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; line-height:15pt; color:#999999; margin:0 auto;">
                                        <tr>
                                            <td bgcolor="#FFFFFF"  height="5" style="font-size:2px; line-height:0px;" valign="top">
                                                <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0; line-height:0px;">
                                                    <tr>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderTopLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                        <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderTopRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
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
                                                                    <td valign="top" width="20" style="padding:0 0 0 0; line-height:100%;"><img border="0" alt="Home:" height="12" src="https://raw.githubusercontent.com/hrefdinesh/email/master/homeIcon.gif" width="11"></td>
                                                                    <td width="160"  style="padding:0 0 0 0; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:100%; color:#999999;" valign="top">
                                                                    <a href="http://iplpredictor.tk" style="border-bottom:1px #777777 dotted; text-decoration:none; color:#777777;">http://www.iplpredictor.tk</a></td>
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
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderBottomLeft.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                        <td valign="top" height="5" width="610" style="font-size:2px; line-height:0px;"></td>
                                                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;"><img alt="" height="5" src="https://raw.githubusercontent.com/hrefdinesh/email/master/borderBottomRight.gif" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20" style="font-size:2px; line-height:2px;"><img alt="" height="20" src="https://raw.githubusercontent.com/hrefdinesh/email/master/shadow620.gif" width="620" border="0" style="display:block;"></td>
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

                    echo $msg;
                    exit();

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

