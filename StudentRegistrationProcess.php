<?php

require "connection.php";

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["email"])){

    $email = $_GET["email"];

    if(empty($email)){

        echo "Please enter an valid Email";

    } else {


        $cord = mt_rand(100000, 999999);
        // Database::iud("UPDATE `teacher` SET `code` = '".$cord."' WHERE `Email` = '".$email."' ");
        Database::iud("INSERT INTO student (Email, `password`, status_id) VALUES ('".$email."', '".$cord."', '1');");

        // email code
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aatzan30@gmail.com';
        $mail->Password = 'eaefbqpqnyjitvfm';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('aatzan30@gmail.com', 'Student Registration');
        $mail->addReplyTo('aatzan30@gmail.com', 'Student Registration');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Student Registration Verification.';
        $bodyContent = '<h1 style= "color : red;"> Your Email : '.$email.'</h1></br> <h1 style = "color : blue;"> Your Password : '.$cord.' </h1>.</br><p style = "color : crimson;">loging this link: http://localhost/OnlinePortal/student.php </p>';
        $mail->Body    = $bodyContent;

        if(!$mail->send()){
            echo "Verification code sending failed";
        }else{
            echo "Success";
        }

    }

}else{
    echo "Please enter your Email Address";
}

?>