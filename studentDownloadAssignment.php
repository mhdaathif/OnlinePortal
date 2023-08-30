<?php

require "connection.php";
session_start();

if (isset($_SESSION["student"])) {

?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>Student | Assignments</title>

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
                        <h1>Assignment</h1>
                    </div>
                </div>

                <?php

                $assimhmet = Database::search("SELECT assignment.id AS ass_id, assignment.Name, assignment.code, teacher.Name AS teacher_name FROM assignment INNER JOIN teacher ON assignment.teacher_Email = teacher.Email;");
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
                                            <h4 class="card-title text-center text-dark"><?php echo $assigment["Name"] ?></h4>
                                            <h6 class="card-subtitle text-dark fw-bold mb-2  mt-2"><?php echo $assigment["teacher_name"] ?></h6>
                                            <a href="<?php echo $assigment["code"] ?>" download="<?php echo $assigment["Name"] ?>" class="card-link btn btn-primary col-12">Download</a></br>
                                            <button onclick="file();" id="upload" class="card-link btn btn-success mt-1 mb-1 col-12">Upload Answar</button>
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

        <div class="modal" tabindex="-1" id="answar">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload Assigment Answar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="col-12 col-lg-6 mt-3">
                            <label class="form-label text-dark fs-4">Assigment ID</label>
                            <input type="text" class="form-control" id="id" value="<?php echo $assigment["ass_id"] ?>" readonly>
                        </div>

                        <div class="col-12 mt-3">
                            <label class="form-label fs-4">Upload The Answar</label>
                            <input type="file" class="form-control" id="fdf">
                            <p class="text-dark fw-bold fs-6 mt-1">put the PDF OR World File only. Other files not allow.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        <button type="button" class="btn btn-primary" onclick="saveAnswar();">Save</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="script.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="bootstrap.bundle.js"></script>

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