<?php

echo "Hello";

// require "connection.php";

// session_start();

// if (isset($_SESSION["admin"])) {

//     $Uname = $_POST["u"];
//     $mobile = $_POST["m"];
//     $addline1 = $_POST["a1"];
//     $addline2 = $_POST["a2"];
//     $city = $_POST["c"]; 

//     if (isset($_FILES["i"])) {
//         $img = $_FILES["i"];
//     }

//     if (isset($img)) {

//         $allowedImageExtention = array("image/jpg", "image/jpeg", "image/png", "image/svg");
//         $fileex = $img["type"];
//         echo $fileex;

//         if (!in_array($fileex, $allowedImageExtention)) {
//             echo "Please select a valied image.";
//         } else {

//             $newimageextention;
//             if ($fileex == "image/jpg") {
//                 $newimageextention = ".jpg";
//             } else if ($fileex == "image/jpeg") {
//                 $newimageextention = ".jpeg";
//             } else if ($fileex == "image/png") {
//                 $newimageextention = ".png";
//             } else if ($fileex == "image/svg") {
//                 $newimageextention = ".svg";
//             }

//             $fileName = "image//profile//" . uniqid() . $newimageextention;

//             move_uploaded_file($img["tmp_name"], $fileName);

//             $profile = Database::search("SELECT * FROM `admin_profile` WHERE `Email_id` = '" . $_SESSION["admin"]["Email"] . "' ");
//             $profilers = $profile->num_rows;

//             if ($profilers == 1) {

//                 Database::iud("UPDATE `admin_profile` SET `code` = '" . $fileName . "' WHERE `Email_id` = '" . $_SESSION["admin"]["Email"] . "' ");
//                 echo "Profile Image Updated Successfully.";
//             } else {

//                 Database::iud("INSERT INTO `admin_profile` (code, Email_id) VALUE ('" . $fileName . "', '" . $_SESSION["admin"]["Email"] . "') ");
//                 echo "New Profile imaged saved successfully";
//             }
//         }
//     } else {

//         Database::iud("UPDATE `admin` SET `Name` = '" . $Uname . "', `Mobile` = '" . $mobile . "' WHERE `Email` = '" . $_SESSION["admin"]["Email"] . "' ");
//         echo "User has been Updated";

//         $address = Database::search("SELECT * FROM admin_address WHERE admin_email = '" . $_SESSION["admin"]["Email"] . "' ");
//         $addressrs = $address->num_rows;

//         if ($addressrs == 1) {

//             Database::iud("UPDATE `admin_address` SET `line1` = '".$addline1."', `line2` = '".$addline2."', `city_id` = '".$city."' WHERE `admin_email` = '".$_SESSION["admin"]["Email"]."' ");
//             echo "Address Updated Successfully.";

//         } else {

//             Database::iud("INSERT INTO user_has_adderss (admin_email, line1, line2, city_id) VALUES ('".$_SESSION["admin"]["Email"]."', '".$addline1."', '".$addline2."', '".$city."') ");
//             echo "New Address Updated Successfully.";
            
//         }
//     }
// } else {
//     echo "Error";
// }

?>