<?php

require "connection.php";
session_start();

if (isset($_SESSION["teacher"])) {

?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>Teacher | ADD Assigment Marks</title>

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
                        <h1>Assigment Marks</h1>
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-3 rounded-3" style="background-color: rgba(255, 255, 255, 0.3);">
                    <div class="row">

                        <div class="col-12 mt-3">
                            <label class="form-label fs-4">Assigment Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>

                        <div class="col-12 col-lg-6 mt-3">
                            <label class="form-label fs-4">Student Email</label>
                            <!-- <input type="text" class="form-control" id="email"> -->
                            <div class="col-12">
                                <select class="form-select" id="email">
                                    <option value="0">Select Student</option>

                                    <?php

                                    $rs = Database::search("SELECT * FROM `student`");
                                    $n = $rs->num_rows;

                                    for ($z = 0; $z < $n; $z++) {
                                        $d = $rs->fetch_assoc();

                                    ?>

                                        <option value="<?php echo $d["Email"]; ?>"><?php echo $d["Email"] ?></option>

                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 mt-3">
                            <label class="form-label fs-4">Assigment Mark</label>
                            <input type="text" class="form-control" id="mark">
                        </div>

                        <div class="col-12 mt-3 mb-4 d-grid">
                            <button class="btn btn-primary" onclick="savemark();">SAVE</button>
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