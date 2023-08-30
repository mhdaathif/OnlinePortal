<?php

require "connection.php";
session_start();

if (isset($_SESSION["teacher"])) {

?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>Teacher | Upload Lesson Notes</title>

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
                        <h1>Upload Lesson Notes</h1>
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-3 rounded-3" style="background-color: rgba(255, 255, 255, 0.3);">
                    <div class="row">

                        <div class="col-12 mt-3">
                            <label class="form-label fs-4">Assignment Name</label>
                            <input type="text" class="form-control" id="assigment1">
                        </div>

                        <div class="col-12 mt-3">
                            <label class="form-label fs-4">Upload The Assigment</label>
                            <input type="file" class="form-control" id="fdf1">
                            <p class="text-dark fw-bold fs-6 mt-1">put the PDF OR World File only. Other files not allow.</p>
                        </div>

                        <div class="col-12 mt-1 mb-4 d-grid">
                            <button class="btn btn-primary" onclick="LessonNotesUpload();">Upload</button>
                        </div>

                    </div>
                </div>

                <div class="col-12 mt-5 mb-5 text-center">
                    <div class="row">
                        <h1 class="text-primary">Uploaded Lesson Notes</h1>
                    </div>
                </div>

                <?php

                $assimhmet = Database::search("SELECT * FROM lessonnotes WHERE teacher_Email = '" . $_SESSION["teacher"]["Email"] . "' ");
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
                                            <h4 class="card-title text-center text-dark"><?php echo $assigment["name"] ?></h4>
                                            <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                            <!-- <a href="#" class="card-link">Card link</a> -->
                                            <a href="<?php echo $assigment["code"] ?>" download="<?php echo $assigment["name"] ?>" class="card-link btn btn-primary col-12">Download</a>
                                            <!-- <button class="btn btn-primary col-12">Download</button> -->
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
        window.location = "teacher.php"
    </script>

<?php

}

?>