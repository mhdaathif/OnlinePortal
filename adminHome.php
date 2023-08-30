<?php

require "connection.php";
session_start();

if (isset($_SESSION["admin"])) {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin | Home</title>

        <link rel="icon" href="images/dm_logo.png">

        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="bg-dark">

        <div class="container-fluid">
            <div class="row">

                <?php
                require "adminheader.php";
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

                                    <a href="adminProfile.php"><button class="btn btn-primary">GO Profile</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">
                                <div class="mt-4 mb-4 text-center">
                                    <h1>Manage Students</h1>

                                    <a href="manageStudents.php"><button class="btn btn-primary">GO Manage Students</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">
                                <div class="mt-4 mb-4 text-center">
                                    <h1>Manage Teachers</h1>

                                    <a href="manageTeachers.php"><button class="btn btn-primary">GO Manage Teachers</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">
                                <div class="mt-4 mb-4 text-center">
                                    <h1>Manage Academic officers</h1>

                                    <a href="manageAcademicOfficers.php"><button class="btn btn-primary">GO Manage Academic officers</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">
                                <div class="mt-4 mb-4 text-center">
                                    <h1>Teacher Registration</h1>

                                    <a href="teacherRegistration.php"><button class="btn btn-primary">GO Teacher Registration</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">
                                <div class="mt-4 mb-4 text-center">
                                    <h1>Academic officers Registration</h1>

                                    <a href="AcademicOfficersRegistration.php"><button class="btn btn-primary">GO Academic officers Registration</button></a>

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
        window.location = "admin.php"
    </script>

<?php

}

?>