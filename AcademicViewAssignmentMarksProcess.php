<?php

require "connection.php";

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["email"])){

    $email = $_GET["email"];
    $name = $_GET["name"];
    $mark = $_GET["mark"];

    if(empty($email)){

        echo "Please enter an valid Email";

    } else {

        // email code
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aatzan30@gmail.com';
        $mail->Password = 'eaefbqpqnyjitvfm';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('aatzan30@gmail.com', 'Assignment Marks');
        $mail->addReplyTo('aatzan30@gmail.com', 'Assignment Marks');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Academic Officers Registration Verification.';
        $bodyContent = '<h1 style= "color : red;"> Your Assignment Name : '.$name.'</h1></br> <h1 style = "color : blue;"> Your Mark : '.$mark.' </h1>.';
        $mail->Body    = $bodyContent;

        if(!$mail->send()){
            echo "Academic Officers Registration sending failed";
        }else{
            echo "Success";
        }

    }

}else{
    echo "Please enter your Email Address";
}
