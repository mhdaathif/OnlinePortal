<?php

require "connection.php";
session_start();

if (isset($_SESSION["teacher"])) {

    $name = $_POST["a"]; 
    if (isset($_FILES["f"])) {
        $assiment = $_FILES["f"];
    }

    if (empty($name)) {
        echo "Please enter your Assigment Name";
    } else if (empty($assiment)) {
        echo "select Your assigment in PDF File,";
    }else{
        
        $allowedImageExtention = array("application/pdf", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        $fileex = $assiment["type"];

        if (!in_array($fileex, $allowedImageExtention)) {
            echo "Please select a PDF File.";
        } else {

            $newimageextention;
            if ($fileex == "application/pdf") {
                $newimageextention = ".pdf";
            }else if($fileex == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
                $newimageextention = ".docx";
            }

            $fileName = "image//assigment//" . uniqid().$name . $newimageextention;

            move_uploaded_file($assiment["tmp_name"], $fileName);

            Database::iud("INSERT INTO `assignment` (`Name`, `code`, `teacher_Email`) VALUE ('" . $name . "', '" . $fileName . "', '" . $_SESSION["teacher"]["Email"] . "') ");
            echo "New Assigment saved successfully";
        }

    }

} else {
    echo "Error";
}

?>