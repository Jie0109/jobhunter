<?php
    session_start();
    include("db.php");

    $np = $cnp = "";
    $cnpErr = $npErr = "";
    $email = $_SESSION['email'];

    $checkp = "SELECT * FROM users WHERE email = '$email'";
    $checkpp = mysqli_query($link, $checkp);
    $rowp = mysqli_fetch_assoc($checkpp);

    if(isset($_POST['pass']))
    {
        if(empty($_POST['npass']))
        {
            $npErr = "Please enter password";
        }
        else
        {
            $np = $_POST['npass'];
        }

        if(empty($_POST['cnpass']))
        {
            $cnpErr = "Please enter confirm password";
        }
        else
        {
            $cnp = $_POST['cnpass'];

            $uppercase = preg_match('@[A-Z]@', $cnp);
            $lowercase = preg_match('@[a-z]@', $cnp);
            $number    = preg_match('@[0-9]@', $cnp);
            $specialChars = preg_match('@[^\w]@', $cnp);

            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($cnp) < 8)
            {
                $cnpErr = "<b>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</b>";
            }
        }

        if(empty($npErr) && empty($cnpErr))
        {
            if($np != $cnp)
            {
                echo '<script>
                        alert("Please enter same password.");
                        location.href = "resetPW.php";
                    </script>';
            }
            else if($rowp['password'] == $cnp)
            {
                echo '<script>
                        alert("Cannot use old password.");
                        location.href = "resetPW.php";
                    </script>';
            }
            else
            {
                $sql = "UPDATE users SET password = '$cnp' WHERE email = '$email'";
                if(mysqli_query($link, $sql))
                {
                    echo '<script>
                            alert("Password updated.");
                            location.href = "login.php";
                        </script>';
                }
            }

            
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
                                                <p class="text-muted">Please enter your new password.</p>
                                                <div class="form-group position-relative">
                                                    <label>New Password <span class="text-danger">*</span></label>
                                                    <input type="password" id="cp" class="form-control" placeholder="123456" name="npass" >
                                                    <span class="invalid-feedback d-block"><?php echo $npErr; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="text-muted">Please enter again your password.</p>
                                                <div class="form-group position-relative">
                                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                                    <input type="password" id="cp1" class="form-control" placeholder="123456" name="cnpass" >
                                                    <span class="invalid-feedback d-block"><?php echo $cnpErr; ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <div class="custom-control m-0 custom-checkbox">
                                                        <label style="cursor: pointer;"><input class="custom-control-input" style="cursor: pointer; weight:20px; height:13px;" type="checkbox"onclick="myFunction()"></label>Show Password
                                                    </div>
                                                </div>
                                            <div class="col-lg-12">
                                                <input type="submit" name="pass" class="btn btn-primary" value="Save">
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
        <script>
            function myFunction() 
            {
                var x = document.getElementById("cp");
                var y = document.getElementById("cp1");

                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }

                if (y.type === "password") {
                    y.type = "text";
                } else {
                    y.type = "password";
                }
            }
        </script>
    </body>
</html>