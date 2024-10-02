<?php
    session_start();
    include("db.php");

    $email = "";

    $n = 6;
    function getName($n)
    {
        $characters = '123456789';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    if(isset($_POST['reset']))
    {
        $email = $_POST['email'];
        $_SESSION['reset_code'] = getName($n);
        $otp = $_SESSION['reset_code'];
        $_SESSION['email'] = $email;

        $headers = 'From: Job Hunting <rex010109@gmail.com>' . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  // Set from headers

        $to      = $email; // Send email to our user //$email
        $subject = 'noreply-jobhunting'; // Give the email a subject 
        $message = 'Here is your one time passcode <b>'.$_SESSION["reset_code"].'</b>.';

        $sqlc = "SELECT * FROM users where email = '$email'";
        $resultc = mysqli_query($link, $sqlc);
        if (mysqli_num_rows($resultc) > 0) 
        {
            //$sql = "UPDATE users SET otp = '$otp' WHERE email = '$email'";
            //if(mysqli_query($link, $sql))
            //{
                mail($to, $subject, $message, $headers);
                echo '<script>
                        alert("Check your email to get the one time passcode.");
                        location.href = "verifyOTP.php";
                    </script>';
//}
        }
        else
        {
            echo'<script>
                        alert("Invalid email, please enter registered email.");
                        location.href = "recovery_passward.php";
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
                                                <p class="text-muted">Please enter your email address. You will receive a OTP to create a new password via email.</p>
                                                <div class="form-group position-relative">
                                                    <label>Email address <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="submit" name="reset" class="btn btn-primary" value="Send">
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