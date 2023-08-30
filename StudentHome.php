<?php

require "connection.php";
session_start();

if (isset($_SESSION["student"])) {

?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>Student Home</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="images/dm_logo.png">

        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="bg-dark">

        <div class="container-fluid">
            <div class="row">

                <?php
                require "studentheader.php";
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
                                    <a href="studentProfile.php"><button class="btn btn-primary">GO To Profile</button></a>
                                </div>

                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">

                                <div class="mt-4 mb-4 text-center">
                                    <h1>See The Assignments</h1>
                                    <a href="studentDownloadAssignment.php"><button class="btn btn-primary">GO To Assigment</button></a>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">

                                <div class="mt-4 mb-4 text-center">
                                    <h1>See The Lesson Notes</h1>
                                    <a href="studentLessonNotes.php"><button class="btn btn-primary">GO To Lesson Notes</button></a>
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
        window.location = "student.php"
    </script>

<?php

}

?>