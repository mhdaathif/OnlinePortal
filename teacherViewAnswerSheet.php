<?php

require "connection.php";
session_start();

if (isset($_SESSION["teacher"])) {

?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>Teacher | Answer Sheets</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="images/dm_logo.png">

        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="bg-dark text-white">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 mt-5 mb-5 text-center">
                    <div class="row">
                        <h1>View Answer Sheets</h1>
                    </div>
                </div>

                <?php

                $assimhmet = Database::search("SELECT aswer.id, aswer.coad, assignment.Name AS ass_name, teacher.Name AS teacher_name, 
                teacher.Email AS teacher_email, student.Name AS student_name, student.Email AS student_email 
                FROM aswer INNER JOIN assignment ON assignment.id = aswer.assiment_id INNER JOIN teacher ON 
                assignment.teacher_Email = teacher.Email INNER JOIN student ON student.Email = aswer.student_Email;");
                $assimhmetrs = $assimhmet->num_rows;

                ?>

                <div class="col-12">
                    <div class="row border border-primary">
                        <div class="col-12 col-lg-12">
                            <div class="row justify-content-center gap-2">

                                <?php
                                for ($y = 0; $y < $assimhmetrs; $y++) {
                                    $assigment = $assimhmet->fetch_assoc();
                                ?>

                                    <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-dark"><?php echo $assigment["ass_name"] ?></h4>
                                            <h6 class="card-subtitle text-dark fw-bold mb-2  mt-2"><?php echo $assigment["student_name"] ?></h6>
                                            <h6 class="card-subtitle text-dark fw-bold mb-2  mt-2"><?php echo $assigment["student_email"] ?></h6>
                                            <a href="<?php echo $assigment["coad"] ?>" download="<?php echo $assigment["student_name"]." ". $assigment["ass_name"] ?>" class="card-link btn btn-primary col-12">Download</a>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <script src="script.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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