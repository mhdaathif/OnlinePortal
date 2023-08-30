<?php

require "connection.php";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin | Manage Students</title>

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
                <h1 class="text-primary fw-bold">Manage All Students</h1>
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
                        <span class="fs-6 fw-bold text-dark">Profile Image</span>
                    </div>
                    <div class="col-3 col-lg-2 bg-primary py-2">
                        <span class="fs-6 fw-bold text-white">User Name</span>
                    </div>
                    <div class="col-3 col-lg-3 bg-light py-2 d-lg-block">
                        <span class="fs-6 fw-bold text-dark">Email</span>
                    </div>
                    <div class="col-2 bg-primary py-2 d-none d-lg-block">
                        <span class="fs-6 fw-bold text-light">Mobile</span>
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

            $user_rs = Database::search("SELECT * FROM student");
            // student.Email, student.Name, student.Mobile, age.Name AS age_name, gender.Name AS gen_name
            $user_num = $user_rs->num_rows;

            $results_per_page = 10;
            $number_of_pages = ceil($user_num / $results_per_page);

            $page_first_result = ((int)$page_no - 1) * $results_per_page;
            $view_user_rs = Database::search("SELECT * FROM `student` LIMIT " . $results_per_page . " OFFSET " . $page_first_result . " ");

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
                        <?php

                        $image_rs = Database::search("SELECT * FROM `student_profile` WHERE `student_Email`='" . $user_data["Email"] . "'");
                        $image_data = $image_rs->fetch_assoc();

                        ?>
                        <div class="col-2 bg-light py-2 d-none d-lg-block" onclick="viewMsgModal();">
                            <img src="<?php echo $image_data["code"]; ?>" style="height: 40px; margin-left: 80px;" />
                        </div>
                        <div class="col-3 col-lg-2 bg-primary py-2">
                            <span class="fs-6 fw-bold text-white"><?php echo $user_data["Name"]; ?></span>
                        </div>
                        <div class="col-3 col-lg-3 bg-light py-2 d-lg-block">
                            <span class="fs-6 fw-bold text-dark"><?php echo $user_data["Email"]; ?></span>
                        </div>
                        <div class="col-2 bg-primary py-2 d-none d-lg-block">
                            <span class="fs-6 fw-bold text-light"><?php echo $user_data["Mobile"]; ?></span>
                        </div>
                        <div class="col-4 col-lg-2 bg-white py-2 d-grid">
                            <?php

                            $s = $user_data["status_id"];
                            if ($s == "1") {
                            ?>
                                <button class="btn btn-danger" onclick="userBlock('<?php echo $user_data['Email']; ?>');">Block</button>
                            <?php
                            } else {
                            ?>
                                <button class="btn btn-success" onclick="userBlock('<?php echo $user_data['Email']; ?>');">Unblock</button>
                            <?php
                            }

                            ?>
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