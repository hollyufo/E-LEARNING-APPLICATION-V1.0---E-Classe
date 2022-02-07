<?php
include("./config/db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
$message_success ="";
if(isset($_POST["reset"])){

    $email_reg=mysqli_real_escape_string($connection,$_POST['email']);
    $details=mysqli_query($connection,"SELECT firstname,email FROM users WHERE email='$email_reg'");
    if (mysqli_num_rows($details)>0) { //if the given email is in database, ie. registered
        $message_success='<div class="alert alert-success"> Please check your email inbox or spam folder and follow the steps </div>';
        //generating the random key
        $key=md5(time()+123456789% rand(4000, 55000000));
        //insert this temporary key into database
        $sql_insert=mysqli_query($connection,"INSERT INTO forget_password(email,temp_key) VALUES('$email_reg','$key')");
        //sending email about update
        $subject = 'Changing password e-class';
        $msg = "Please copy the link and paste in your browser address bar". "\r\n"."http://e-class.imranechaibi.com/recoverpassword.php?key=".$key;
        // here new code
                    require './PHPMailer/src/Exception.php';
                    require './PHPMailer/src/PHPMailer.php';
                    require './PHPMailer/src/SMTP.php';
                //Import PHPMailer classes into the global namespace

                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'eclass@imranechaibi.com';                     //SMTP username
                    $mail->Password   = 'dataCRYPTO123';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('eclass@imranechaibi.com', 'imranechaibi');
                    $mail->addAddress($email_reg, 'Eclass team');     //Add a recipient
                    //$mail->addAddress('ellen@example.com');               //Name is optional
                    //$mail->addReplyTo('info@example.com', 'Information');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                    //Attachments
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = $subject;
                    $mail->Body    = $email."<br>".$msg;
                    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    header('Location: ./index.php');
                } catch (Exception $e) {
                    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
    }
    else{
        $message="Sorry! no account associated with this email";
    }
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>