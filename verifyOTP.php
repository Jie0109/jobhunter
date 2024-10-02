<?php
    session_start();
    include("db.php");

    if(isset($_POST['otp']))
    {
        $otp = $_POST['opass'];

        if($otp == $_SESSION['reset_code'])
        {
            echo '<script>
                    alert("Reset your password now.");
                    location.href = "resetPW.php";
                </script>';
        }
        else
        {
            echo '<script>
                alert("Wrong OTP please try again.");
                location.href = "verifyOTP.php";
            </script>';
        }
        
    }
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jobya - Responsive Job Board HTML Template</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Themesdesign" />
    
        <link rel="shortcut icon" href="images/favicon.ico">    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    
        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    
        <link rel="stylesheet" type="text/css" href="css/selectize.css" />
    
        <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    
        <!-- Custom  Css -->
        <link rel="stylesheet" type="text/css" href="css/style.min.css" />

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="index.php" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="vh-100" style="background: url('images/user.jpg') center center;">

            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Recover Account</h4>  
                                    </div>
                                    <form class="login-form" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="text-muted">Please enter your OTP that received in your email.</p>
                                                <div class="form-group position-relative">
                                                    <label>One-time Password <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="123456" name="opass" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="submit" name="otp" class="btn btn-primary" value="Verify">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/plugins.js"></script>

        <!-- selectize js -->
        <script src="js/selectize.min.js"></script>

        <script src="js/jquery.nice-select.min.js"></script>

        <script src="js/app.js"></script>
    </body>
</html>