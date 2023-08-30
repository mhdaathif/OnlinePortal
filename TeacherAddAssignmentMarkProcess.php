<?php

session_start();

require "connection.php";

$name = $_POST["n"];
$email = $_POST["e"];
$mark = $_POST["m"];

$teachermail = $_SESSION["teacher"]["Email"];

if(empty($name)){
    echo "Please add a Assignment Name.";
}else if($email == "0"){
    echo "Please select a student Email";
}else if(empty($mark)){
    echo "Please add a Assignment Mark.";
}else{

    Database::iud("INSERT INTO marks (`Name`, `mark`, `student_Email`, `teacher_Email`) VALUES ('".$name."', '".$mark."', '".$email."', '".$teachermail."');");
    echo "Assigment Marks Add Successfully.";

}

?>