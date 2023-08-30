<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>Digital Market</title> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/dm_logo.png">

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid offset-1">
            <span class="text-lg-start label1"><b>Welcome </b>
                <?php

                if (isset($_SESSION["admin"])) {
                    $data = $_SESSION["admin"];
                ?>

                    <?php echo $data["Name"]; ?>

                <?php
                } else {

                ?>

                    <a href="adminProfile.php">Edit Profile</a>

                <?php

                }

                ?>
            </span> | 
            <span class="text-lg-start label2">Help and Contact</span> | 
            <span class="text-lg-start label2" onclick="LogOut();">Log Out</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-self-end offset-lg-6" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="#">Sell</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Digital
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Home</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Sellings</a></li>
                            <li><a class="dropdown-item" href="#">Products</a></li>
                            <li><a class="dropdown-item" href="#">Wish List</a></li>
                            <li><a class="dropdown-item" href="#">Purchase History</a></li>
                            <li><a class="dropdown-item" href="#">Messages</a></li>
                            <li><a class="dropdown-item" href="#">Saved</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <script src="bootstrap.bundle.js"></script>
    <!-- <script src="bootstrap.js"></script> -->
    <script src="script.js"></script>

</body>

</html>