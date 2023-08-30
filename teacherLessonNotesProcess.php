<?php

require "connection.php";
session_start();

if (isset($_SESSION["teacher"])) {

    $name = $_POST["a"]; 
    if (isset($_FILES["f"])) {
        $lessonNote = $_FILES["f"];
    }

    if (empty($name)) {
        echo "Please enter your Lesson Note Name";
    } else if (empty($lessonNote)) {
        echo "select Your assigment in PDF File OR World File.";
    }else{
        
        $allowedImageExtention = array("application/pdf", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        $fileex = $lessonNote["type"];

        if (!in_array($fileex, $allowedImageExtention)) {
            echo "Please select a PDF File OR World File.";
        } else {

            $newimageextention;
            if ($fileex == "application/pdf") {
                $newimageextention = ".pdf";
            }else if($fileex == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
                $newimageextention = ".docx";
            }

            $fileName = "image//assigment//" . uniqid() . $newimageextention;

            move_uploaded_file($lessonNote["tmp_name"], $fileName);

            Database::iud("INSERT INTO `lessonnotes` (`name`, `code`, `teacher_Email`) VALUE ('" . $name . "', '" . $fileName . "', '" . $_SESSION["teacher"]["Email"] . "') ");
            echo "New Assigment saved successfully";
        }

    }

} else {
    echo "Error";
}

?>