<?php

require "connection.php";
session_start();

if (isset($_SESSION["acadmic"])) {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Academic Officers | Home</title>

        <link rel="icon" href="images/dm_logo.png">

        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="bg-dark">

        <div class="container-fluid">
            <div class="row">

                <?php
                require "acadmicheader.php";
                ?>

                <hr class="hr-break-1">

                <div class="col-12 text-center fw-bold text-primary">
                    <div class="row">
                        <h1>Dashboard</h1>
                    </div>
                </div>

                <div class="col-12 offset-1">
                    <div class="row">

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">
                                <div class="mt-4 mb-4 text-center">
                                    <h1>Update Profile</h1>

                                    <a href="acadmicProfile.php"><button class="btn btn-primary">GO Profile</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">
                                <div class="mt-4 mb-4 text-center">
                                    <h1>Student Registration</h1>

                                    <a href="StudentRegistration.php"><button class="btn btn-primary">GO Student Registration</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">
                                <div class="mt-4 mb-4 text-center">
                                    <h1>View Assignment Marks</h1>

                                    <a href="AcademicViewAssignmentMarks.php"><button class="btn btn-primary">GO Student Registration</button></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


    </body>

    </html>

<?php

} else {

?>

    <script>
        window.location = "academicOfficers.php"
    </script>

<?php

}

?>