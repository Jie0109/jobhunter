<?php
    include("db.php");
    //initialize all value
    $email = $password = $username = $utype = $address = $logo = "";
    $email_err = $password_err = $username_err = $utypeErr = $address_err = $logo_err = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['register']))
    {
        //Validate
        if(empty($_POST["email"]))
        {
            $email_err = "<b>Please enter an email<b>";
        }
        elseif(strlen(trim($_POST['email'])) == 0)
        {
            $email_err = "<b>Please enter an email<b>";
        }
        else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", test_input($_POST["email"])))
        {
            $email_err = "<b>Please enter a valid email address<b>";
        }
        else
        {
            $email = $_POST["email"];
            $sqli = "SELECT * FROM users where email = '$email'";
            $results = mysqli_query($link, $sqli);
            if (mysqli_num_rows($results) > 0) 
            {
                $email_err = "<b>Email taken<b>";
                echo "
                <script>
                Swal.fire({
                    title: 'Email is taken',
                    text: 'Please try again',
                    icon: 'error'
                }).then(function() {
                location.href = 'signup.php'
                })</script>";
            } 
            else
            {
                $email = $_POST["email"];
            }
        }
        

        if(empty($_POST["uname"]))
        {
            $username_err = "<b>Please enter an username</b>";
        }
        elseif(strlen(trim($_POST['uname'])) == 0)
        {
            $username_err = "<b>Please enter an username</b>";
        }
        else
        {
            $username = $_POST["uname"];
        }

        if(empty($_POST["address"]))
        {
            $address_err = "<b>Please enter address</b>";
        }
        else
        {
            $address = $_POST["address"];
        }

        if(empty($_POST["password"]))
        {
            $password_err = "<b>Please enter a password</b>";
        }
        else
        {
            $password = $_POST["password"];

            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
            {
                $password_err = "<b>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</b>";
            }
        }

        function isImage($filename)
        {
            $allowed_extensions = array("jpg", "jpeg", "png", "gif");
            $file_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            return in_array($file_extension, $allowed_extensions);
        }
        
        $registrationDate = date('Y-m-d');
        $filename1 = $_FILES["img1"]["name"];

        if(empty($email_err) && empty($password_err) && empty($username_err) && empty($address_err)) 
        {
            if (isImage($filename1)) 
            {
                $tempname1 = $_FILES["img1"]["tmp_name"];
                $folder1 = "images/" . $filename1;
        
                if (move_uploaded_file($tempname1, $folder1)) 
                {
                    $hash = password_hash($password, PASSWORD_DEFAULT);
            
                    $sql = "INSERT INTO users (username, email, password, pw, mode, place, otp) VALUES ('$username', '$email', '$password', '$hash', 'com', '$address', '$filename1')";
                    
                    if (mysqli_query($link, $sql)) 
                    {
                        echo '<script>
                                alert("Account created");
                                location.href = "login.php";
                              </script>';
                    }
                } 
            } 
            else 
            {
                echo '<script>
                        alert("Only JPG, JPEG, PNG, and GIF files are allowed.");
                        location.href = "comSignup.php";
                      </script>';
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
                            <div class="col-md-6">
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Register <a href="signup.php">as an user</a></h4>  
                                    </div>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-form" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">                                               
                                                    <label>Company Name (Cannot be changed)<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Name" value="" name="uname" required="">
                                                    <span class="invalid-feedback d-block"><?php echo $username_err; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Company Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Email" value="" name="email" required="">
                                                    <span class="invalid-feedback d-block"><?php echo $email_err; ?></span>
                                                </div>
                                            </div> <br>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Company Address <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Address" value="" name="address" required="">
                                                    <span class="invalid-feedback d-block"><?php echo $address_err; ?></span>
                                                </div>
                                            </div> <br>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Company Logo<span style="color: red;">*</span></label><br>
                                                    <input type="file" name="img1" required>
                                                    <span class="invalid-feedback d-block"><?php echo $logo_err; ?></span>
                                                </div>
                                            </div> <br>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <input type="password" id="cp" class="form-control" placeholder="Password" value="" name="password" onkeyup="validatePassword(this.value);">
                                                    <span class="invalid-feedback d-block"><?php echo $password_err; ?></span>
                                                    <label style="cursor: pointer;"><input class="custom-control-input" style="cursor: pointer; weight:20px; height:13px;" type="checkbox"onclick="myFunction()"></label> Show Password
                                                </div>
                                            </div>
                                               <!-- <label for="utype">Sign Up As:</label><br>
                                                <input type="radio" id="user" name="utype" value="user" required>
                                                <label for="user">User</label><br>
                                                <input type="radio" id="company" name="utype" value="com" required>
                                                <label for="company">Company</label><br><br>-->

                                            <div class="frm-action">
                                                <div class="tci-box">
                                                     <input type="submit" name="register" class="btn btn-primary w-100" value="Register">
                                                </div>
                                            </div>
                                          
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="login.php" class="forgotten forg">Sign in</a></p>
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

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function validatePassword(password) {
        // Do not show anything when the length of password is zero.
        if (password.length === 0) {
            document.getElementById("msg").innerHTML = "";
            return;
        }
        // Create an array and push all possible values that you want in password
        var matchedCase = new Array();
        matchedCase.push("[$@$!%*#?&]"); // Special Charector
        matchedCase.push("[A-Z]"); // Uppercase Alpabates
        matchedCase.push("[0-9]"); // Numbers
        matchedCase.push("[a-z]"); // Lowercase Alphabates

        // Check the conditions
        var ctr = 0;
        for (var i = 0; i < matchedCase.length; i++) {
            if (new RegExp(matchedCase[i]).test(password)) {
                ctr++;
            }
        }
        // Display it
        var color = "";
        var strength = "";
        switch (ctr) {
            case 0:
            case 1:
            case 2:
                strength = " (Very Weak)";
                color = "red";
                break;
            case 3:
                strength = " (Medium)";
                color = "orange";
                break;
            case 4:
                strength = " (Strong)";
                color = "green";
                break;
        }
        document.getElementById("msg").innerHTML = strength;
        document.getElementById("msg").style.color = color;
        }
    </script>

    </body>
</html>