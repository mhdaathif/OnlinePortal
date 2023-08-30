<?php

require "connection.php";
session_start();

if (isset($_SESSION["teacher"])) {

?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>Teacher Home</title>

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
                require "teacherheader.php";
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
                                    <a href="TeacherProfile.php"><button class="btn btn-primary">GO To Profile</button></a>
                                </div>

                            </div>
                        </div> 


                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">

                                <div class="mt-4 mb-4 text-center">
                                    <h1>Upload Assignments</h1>
                                    <a href="TeacherUploadAssigment.php"><button class="btn btn-primary">GO To Assigment</button></a>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">

                                <div class="mt-4 mb-4 text-center">
                                    <h1>Upload Lesson Notes</h1>
                                    <a href="teacherUploadLessonNotes.php"><button class="btn btn-primary">GO To Lesson Notes</button></a>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">

                                <div class="mt-4 mb-4 text-center">
                                    <h1>View Submitted Answer Sheets</h1>
                                    <a href="teacherViewAnswerSheet.php"><button class="btn btn-primary">GO To Answer Sheets</button></a>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-3 m-4 bg-white rounded-2">
                            <div class="row">

                                <div class="mt-4 mb-4 text-center">
                                    <h1>Add Assignment Marks</h1>
                                    <a href="TeacherAddAssignmentMarks.php"><button class="btn btn-primary">GO To Assignment Marks</button></a>
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
        window.location = "teacher.php"
    </script>

<?php

}

?>