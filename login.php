<?php
    include("db.php");
    session_start();
    if (!isset($_SESSION["loggedin"])) 
    {
        
    }
    else
    {
        echo '<script>
                alert("Error 404");
                location.href = "index.php";
            </script>';
    }

    if(isset($_POST['logins']))
    {
        $email = $password = "";
        $email_err = $password_err = $login_err = "";


        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * from users where email = '$email' AND password = '$password'";
        $result = mysqli_query($link,  $sql);

        if(mysqli_num_rows($result) === 1)
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["uname"] = $row['username'];
                $_SESSION["mode"] = $row["mode"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["id"] = $row["id"];
                $_SESSION["img"] = $row["otp"];
                $_SESSION["place"] = $row["place"];
                
                if($_SESSION['mode'] == 'user')
                {
                    header('Location: index.php');
                }
                else if($_SESSION['mode'] == 'com')
                {
                    header('Location: job-posted.php');
                }
            }
        }
        else
        {
            echo '<script>
                alert("Invalid password. Please try again.");
                location.href = "login.php";
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
                                <div class="login-page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Login</h4>  
                                    </div>
                                    <form class="login-form" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <input type="password" id="cp" class="form-control" placeholder="Password" name="password"required="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <p class="float-end forgot-pass"><a href="recovery_passward.php" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                                <div class="form-group">
                                                    <div class="custom-control m-0 custom-checkbox">
                                                        <label style="cursor: pointer;"><input class="custom-control-input" style="cursor: pointer; weight:20px; height:13px;" type="checkbox"onclick="myFunction()"></label> Show Password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-0">
                                                <input type="submit" name="logins" class="btn btn-primary w-100" value="Sign in">
                                                <!--<button class="btn btn-primary w-100">Sign in</button>-->
                                            </div>
                                            <!--<div class="col-lg-12 mt-4 text-center">
                                                <h6>Or Login With</h6>
                                                <ul class="list-unstyled social-icon mb-0 mt-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                                </ul><end icon
                                            </div>-->
                                            <div class="col-12 text-center">
                                                <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="signup.php" class="text-dark font-weight-bold">Sign Up</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div><!---->
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
        <script>
        function myFunction() 
        {
            var x = document.getElementById("cp");

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        </script>
</body>
</html>