<?php

require "connection.php";


if(isset($_GET["email"])){
    
    $user_email = $_GET["email"];
    $user_rs = Database::search("SELECT * FROM `student` WHERE `Email`='".$user_email."'");
    $user_num  = $user_rs->num_rows;

    if($user_num==1){
        $user_data = $user_rs->fetch_assoc();
        $user_status = $user_data["status_id"];

        if($user_status=="1"){
            Database::iud("UPDATE `student` SET `status_id`='2' WHERE `Email`='".$user_email."'");
            echo "success1";

        }else if($user_status=="2"){
            Database::iud("UPDATE `student` SET `status_id`='1' WHERE `Email`='".$user_email."'");
            echo "success2";

        }
    }

}

?>