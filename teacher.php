<!DOCTYPE html>

<html>

<head>
    <title>Teacher Login</title>

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
                        <p class="text-center title01">Hi, Welcome to Teacher Online Class</p>
                    </div>
                </div>
            </div>
            <!-- logo -->
            <!-- content -->
            <div class="col-12 p-3">
                <div class="row">

                    <!-- Sign In -->

                    <div class="col-12 col-lg-6 offset-lg-3 background">
                        <div class="row g-2">

                            <div class="col-12">
                                <p class="title02">Sign In Your Account</p>
                                <span class="text-danger" id="msg2"></span>
                            </div>

                            <?php 

                            $email = "";
                            $password = "";

                            if(isset($_COOKIE["email"])){

                                $email = $_COOKIE["email"];

                            }

                            if(isset($_COOKIE["password"])){

                                $password = $_COOKIE["password"];

                            }
                            
                            ?>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="email2" value="<?php echo $email; ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password2" value="<?php echo $password; ?>">
                            </div>

                            <div class="col-6">
                                <input type="checkbox" class="form-check-input" value="1" id="remberMe2">
                                <label class="form-check-label">Rember Me</label>
                            </div>

                            <div class="col-6">
                                <a href="#" class="link-primary" onclick="TEAforgotPassword();">Forgot Password</a>
                            </div>

                            <div class="col-12 d-grid">
                                <button class="btn btn-primary" onclick="TeachersignIn();">Sign In</button>
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

                <!--Forgot Password  -->

            <div class="modal" tabindex="-1" id="forgotPasswordWindow">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Password Reset</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row g-3">

                                <div class="col-6">

                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="newPassword2">
                                        <button class="btn btn-outline-secondary" type="button" id="newPasswordButton2" onclick="showPasswordNew2();">Show</button>
                                    </div>

                                </div>

                                <div class="col-6">

                                    <label class="form-label">Re-type Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="repeatNewPassword2">
                                        <button class="btn btn-outline-secondary" type="button" id="repeatNewPasswordButton2" onclick="showPasswordComfirm2();">Show</button>
                                    </div>

                                </div>

                                <div class="col-12">

                                    <label class="form-label">Verification Code</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="verificationCode">
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="changePassword2();">Change Password</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Forgot Password  -->

            </div>
        </div>

        <script src="bootstrap.js"></script>
        <script src="script.js"></script>

</body>

</html>