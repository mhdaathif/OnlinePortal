<!DOCTYPE html>

<html>

<head>
    <title>Student Registration</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/dm_logo.png">

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!-- logo -->
            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12 ">
                        <p class="text-center title01">Hi, Welcome to Student Registration Online Class</p>
                    </div>
                </div>
            </div>
            <!-- logo -->
            <!-- content -->
            <div class="col-12 p-3">
                <div class="row">

                    <!-- Sign In -->

                    <div class="col-12 col-lg-6 offset-lg-3 background" id="singInBox">
                        <div class="row g-2">

                            <div class="col-12">
                                <p class="title02">Student Registration Your Account</p>
                                <span class="text-danger" id="msg2"></span>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="col-12 d-grid">
                                <button class="btn btn-primary" onclick="StudentRegistration();">Student Registration</button>
                            </div>

                            <div class="col-12 col-lg-6 d-grid"></div>

                        </div>

                        <!-- Sign In -->


                    </div>
                </div>
                <!-- content -->

                <div class="col-12 fixed-bottom d-none d-lg-block">
                    <p class="text-center">&copy; 2021 zillx.lk All Rights Reserved.</p>
                </div>

            </div>
        </div>

        <script src="bootstrap.js"></script>
        <script src="script.js"></script>

</body>

</html>