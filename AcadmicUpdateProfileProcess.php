<?php

// echo "HELLO";

require "connection.php";

session_start();

if (isset($_SESSION["acadmic"])) {

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

            $profile = Database::search("SELECT * FROM `academic_profile` WHERE `email_id` = '" . $_SESSION["acadmic"]["Email"] . "' ");
            $profilers = $profile->num_rows;

            if ($profilers == 1) {

                Database::iud("UPDATE `academic_profile` SET `code` = '" . $fileName . "' WHERE `email_id` = '" . $_SESSION["acadmic"]["Email"] . "' ");
                echo "Profile Image Updated Successfully.";
            } else {

                Database::iud("INSERT INTO `academic_profile` (code, email_id) VALUE ('" . $fileName . "', '" . $_SESSION["acadmic"]["Email"] . "') ");
                echo "New Profile imaged saved successfully";
            }
        }
    } else {

        Database::iud("UPDATE `academicofficer` SET `Name` = '" . $Uname . "', `Mobile` = '" . $mobile . "' WHERE `Email` = '" . $_SESSION["acadmic"]["Email"] . "' ");
        echo "User has been Updated";

        $address = Database::search("SELECT * FROM academic_address WHERE academi_email = '" . $_SESSION["acadmic"]["Email"] . "' ");
        $addressrs = $address->num_rows;

        if ($addressrs == 1) {

            Database::iud("UPDATE `academic_address` SET `line1` = '".$addline1."', `line2` = '".$addline2."', `city_id` = '".$city."' WHERE `academi_email` = '".$_SESSION["acadmic"]["Email"]."' ");
            echo "Address Updated Successfully.";

        } else {

            Database::iud("INSERT INTO academic_address (academi_email, line1, line2, city_id) VALUES ('".$_SESSION["acadmic"]["Email"]."', '".$addline1."', '".$addline2."', '".$city."') ");
            echo "New Address Updated Successfully.";
            
        }
    }
} else {
    echo "Error";
}

?>