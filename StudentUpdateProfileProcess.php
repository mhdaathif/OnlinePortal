<?php

// echo "HELLO";

require "connection.php";

session_start();

if (isset($_SESSION["student"])) {

    $Uname = $_POST["u"];
    $mobile = $_POST["m"];
    $addline1 = $_POST["a1"];
    $addline2 = $_POST["a2"];
    $city = $_POST["c"]; 

    if (isset($_FILES["i"])) {
        $img = $_FILES["i"];
    }

    if (isset($img)) {

        $allowedImageExtention = array("image/jpg", "image/jpeg", "image/png", "image/svg");
        $fileex = $img["type"];
        echo $fileex;

        if (!in_array($fileex, $allowedImageExtention)) {
            echo "Please select a valied image.";
        } else {

            $newimageextention;
            if ($fileex == "image/jpg") {
                $newimageextention = ".jpg";
            } else if ($fileex == "image/jpeg") {
                $newimageextention = ".jpeg";
            } else if ($fileex == "image/png") {
                $newimageextention = ".png";
            } else if ($fileex == "image/svg") {
                $newimageextention = ".svg";
            }

            $fileName = "image//profile//" . uniqid() . $newimageextention;

            move_uploaded_file($img["tmp_name"], $fileName);

            $profile = Database::search("SELECT * FROM `student_profile` WHERE `student_Email` = '" . $_SESSION["student"]["Email"] . "' ");
            $profilers = $profile->num_rows;

            if ($profilers == 1) {

                Database::iud("UPDATE `student_profile` SET `code` = '" . $fileName . "' WHERE `student_Email` = '" . $_SESSION["student"]["Email"] . "' ");
                echo "Profile Image Updated Successfully.";
            } else {

                Database::iud("INSERT INTO `student_profile` (code, student_Email) VALUE ('" . $fileName . "', '" . $_SESSION["student"]["Email"] . "') ");
                echo "New Profile imaged saved successfully";
            }
        }
    } else {

        Database::iud("UPDATE `student` SET `Name` = '" . $Uname . "', `Mobile` = '" . $mobile . "' WHERE `Email` = '" . $_SESSION["student"]["Email"] . "' ");
        echo "User has been Updated";

        $address = Database::search("SELECT * FROM student_address WHERE student_email = '" . $_SESSION["student"]["Email"] . "' ");
        $addressrs = $address->num_rows;

        if ($addressrs == 1) {

            Database::iud("UPDATE `student_address` SET `line1` = '".$addline1."', `line2` = '".$addline2."', `city_id` = '".$city."' WHERE `student_email` = '".$_SESSION["student"]["Email"]."' ");
            echo "Address Updated Successfully.";

        } else {

            Database::iud("INSERT INTO student_address (student_email, line1, line2, city_id) VALUES ('".$_SESSION["student"]["Email"]."', '".$addline1."', '".$addline2."', '".$city."') ");
            echo "New Address Updated Successfully.";
            
        }
    }
} else {
    echo "Error";
}

?>