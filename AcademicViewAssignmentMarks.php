<?php

require "connection.php";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Academic officers | View Assigment Marks</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="resources/logo.svg" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-dark text-white">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 mt-2 text-center">
                <h1 class="text-primary fw-bold">View Assigment Marks</h1>
            </div>

            <div class="col-12 mt-3">
                <div class="row">
                    <div class="offset-0 offset-lg-3 col-12 col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-3 d-grid">
                                <button class="btn btn-warning">Search User</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3 mb-3">
                <div class="row">
                    <div class="col-2 col-lg-1 bg-primary py-2 text-end">
                        <span class="fs-6 fw-bold text-white">#</span>
                    </div>
                    <div class="col-2 bg-light py-2 d-none d-lg-block">
                        <span class="fs-6 fw-bold text-dark">Assigment Name</span>
                    </div>
                    <div class="col-3 col-lg-2 bg-primary py-2">
                        <span class="fs-6 fw-bold text-white">Mark</span>
                    </div>
                    <div class="col-3 col-lg-3 bg-light py-2 d-lg-block">
                        <span class="fs-6 fw-bold text-dark">Student Email</span>
                    </div>
                    <div class="col-2 bg-primary py-2 d-none d-lg-block">
                        <span class="fs-6 fw-bold text-light">Teacher Email</span>
                    </div>
                    <div class="col-4 col-lg-2 bg-white"></div>
                </div>
            </div>

            <?php

            $page_no;

            if (isset($_GET["page"])) {
                $page_no = $_GET["page"];
            } else {
                $page_no = 1;
            }

            $user_rs = Database::search("SELECT * FROM marks");
            // student.Email, student.Name, student.Mobile, age.Name AS age_name, gender.Name AS gen_name
            $user_num = $user_rs->num_rows;

            $results_per_page = 10;
            $number_of_pages = ceil($user_num / $results_per_page);

            $page_first_result = ((int)$page_no - 1) * $results_per_page;
            $view_user_rs = Database::search("SELECT * FROM `marks` LIMIT " . $results_per_page . " OFFSET " . $page_first_result . " ");

            $view_results_num = $view_user_rs->num_rows;

            $c = 0;

            ?>


            <?php

            while ($user_data = $view_user_rs->fetch_assoc()) {
                $c = $c + 1;

            ?>

                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-2 col-lg-1 bg-primary py-2 text-end">
                            <span class="fs-6 fw-bold text-white"><?php echo $c; ?></span>
                        </div>

                        <div class="col-2 bg-light py-2 d-none d-lg-block" onclick="viewMsgModal();">
                            <label class="fs-6 fw-bold text-dark" id="name"><?php echo $user_data["Name"]; ?></label>
                        </div>
                        <div class="col-3 col-lg-2 bg-primary py-2">
                            <span class="fs-6 fw-bold text-white" id="mark"><?php echo $user_data["mark"]; ?></span>
                        </div>
                        <div class="col-3 col-lg-3 bg-light py-2 d-lg-block">
                            <span class="fs-6 fw-bold text-dark"><?php echo $user_data["student_Email"]; ?></span>
                        </div>
                        <div class="col-2 bg-primary py-2 d-none d-lg-block">
                            <span class="fs-6 fw-bold text-light"><?php echo $user_data["teacher_Email"]; ?></span>
                        </div>
                        <div class="col-4 col-lg-2 bg-white py-2 d-grid">
                                <button class="btn btn-success" onclick="ReleaseMarks('<?php echo $user_data['student_Email']; ?>');">Release marks to the students</button>
                        </div>
                    </div>
                </div>

            <?php

            }
            ?>

            <div class="col-12 text-center mt-3">
                <div class="pagination">
                    <a href="<?php if ($page_no <= 1) {
                                    echo "#";
                                } else {
                                    echo "?page=" . ($page_no - 1);
                                } ?>">&laquo;</a>

                    <?php

                    for ($page = 1; $page <= $number_of_pages; $page++) {
                        if ($page == $page_no) {
                    ?>
                            <a href="<?php echo "?page=" . ($page); ?>" class="active"><?php echo $page; ?></a>
                        <?php
                        } else {
                        ?>
                            <a href="<?php echo "?page=" . ($page); ?>"><?php echo $page; ?></a>
                    <?php
                        }
                    }

                    ?>
                    <a href="<?php if ($page_no >= $number_of_pages) {
                                    echo "#";
                                } else {
                                    echo "?page=" . ($page_no + 1);
                                } ?>">&raquo;</a>
                </div>
            </div>


        </div>
    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>