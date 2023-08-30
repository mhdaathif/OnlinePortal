<?php

require "connection.php";
session_start();

echo $_GET["assign_id"];

if (isset($_SESSION["student"])) {

?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>Student | Upload Answar</title>

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
                        <h1>Upload Answar</h1>
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-3 rounded-3" style="background-color: rgba(255, 255, 255, 0.3);">
                    <div class="row">

                        <?php

                        $assimhmet = Database::search("SELECT assignment.Name AS ass_name, assignment.id AS ass_id FROM assignment WHERE `id`=");
                        $assimhmetrs = $assimhmet->num_rows;

                        ?>

                        <?php
                        for ($y = 0; $y < $assimhmetrs; $y++) {
                            $assigment = $assimhmet->fetch_assoc();
                        ?>

                            <div class="col-12 col-lg-6 mt-3">
                                <label class="form-label fs-4">Student Name</label>
                                <input type="text" class="form-control" id="assigment" value="<?php echo $_SESSION["student"]["Name"] ?>" readonly>
                            </div>

                            <div class="col-12 col-lg-6 mt-3">
                                <label class="form-label fs-4">Student Email</label>
                                <input type="text" class="form-control" id="assigment" value="<?php echo $_SESSION["student"]["Email"] ?>" readonly>
                            </div>

                            <div class="col-12 col-lg-6 mt-3">
                                <label class="form-label fs-4">Assigment ID</label>
                                <input type="text" class="form-control" id="assigment" value="<?php echo $assigment["ass_id"] ?>" readonly>
                            </div>

                            <div class="col-12 col-lg-6 mt-3">
                                <label class="form-label fs-4">Assigment Name</label>
                                <input type="text" class="form-control" id="assigment" value="<?php echo $assigment["ass_name"] ?>" readonly>
                            </div>

                            <div class="col-12 mt-3">
                                <label class="form-label fs-4">Upload The Answar</label>
                                <input type="file" class="form-control" id="fdf">
                                <p class="text-dark fw-bold fs-6 mt-1">put the PDF OR World File only. Other files not allow.</p>
                            </div>

                            <div class="col-12 mt-1 mb-4 d-grid">
                                <button class="btn btn-primary">Upload</button>
                            </div>
                        <?php
                        }
                        ?>
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