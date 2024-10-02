<?php
    session_start();
    include("db.php");

    date_default_timezone_set('Asia/Kuala_Lumpur');
    
?>

<!doctype html>
<html class="no-js" lang="en">

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

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css" />

    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('scroll', function() {
            var header = document.getElementById('topnav');
            if (window.scrollY > 0) {
                header.style.backgroundColor = 'beige';
            } else {
                header.style.backgroundColor = ''; // Reset to default or add your default color
            }
        });
    </script>

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

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-start">
                    <!--<div class="phone">
                        <i class="mdi mdi-phone-classic"></i> +1 800 123 45 67
                    </div>-->
                    <!--<div class="email">
                        <a href="#">
                            <i class="mdi mdi-email"></i> Support@mail.com
                        </a>
                    </div>-->
                </div>
                <div class="float-end">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item">
                            <a href="<?php echo isset($_SESSION["loggedin"]) ? 'candidates-profile.php' : 'login.php'; ?>">
                                <i class="mdi mdi-account me-2"></i>
                                <?php 
                                    if (!isset($_SESSION["loggedin"])) {
                                        echo "Login now";
                                    } else {
                                        echo $_SESSION['uname'];
                                    }
                                ?>
                            </a>
                        </li>
                        </li>
                        <!--<li class="list-inline-item">
                            <select id="select-lang" class="demo-default">
                                <option value="">Language</option>
                                <option value="4">English</option>
                                <option value="1">Spanish</option>
                                <option value="3">French</option>
                                <option value="5">Hindi</option>
                            </select>
                        </li>-->
                        <?php 
                            if (isset($_SESSION["loggedin"]))
                            
                            echo "<li class='list-inline-item'><a href='logout.php'><i class='mdi mdi-logout me-2'></i>Logout"
                        ?>
                        
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.php" class="logo">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="18" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />
                </a>
            </div>
            <?php
                if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'com' && isset($_SESSION['id'])) 
                {
                    echo'
                    <div class="buy-button">
                    <a href="post-a-job.php" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
                </div>
                    ';
                }
                else
                {
                    echo'
                    <div class="buy-button">
                    <a href="getQuote.php" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Estimate your salary here</a>
                </div>
                    ';
                }
            ?>                 
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li>
                        <?php
                            
                            if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'user' || !isset($_SESSION["loggedin"]))
                            {
                                echo'<a href="job-list.php">Home</a>';
                            } 
                            else
                            {
                                echo'<a href="job-posted.php">Home</a>';
                            }
                        
                        ?>
                        
                    </li>
                    <?php
                    
                        if (!isset($_SESSION["loggedin"])) 
                        {
                            
                        }
                        else
                        {
                            if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'user' && isset($_SESSION['id'])) 
                            {
                                echo'
                                <li class="has-submenu">
                                    <a href="job-list.php">Jobs</a><span class="menu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="job-list.php">Job List</a></li>
                                        <li><a href="job-applied.php">Job Applied</a></li>
                                    </ul>
                                </li>';
                            }
                            else 
                            {
                                echo'
                                    <li><a href="job-list.php">Job List</a></li>
                                ';
                            }

                            
                                        
                        }
                    
                    ?>
                    <?php
                    if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'com' && isset($_SESSION['id']))
                    {
                        echo'<li><a href="candidatesList.php">Candidates</a></li>';
                    }
                    ?>
                    
                    
    
                    <!--<li class="has-submenu">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="about.php">About us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="faq.php">Faqs</a></li>
                            <li><a href="pricing.php">Pricing plans</a></li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Candidates</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="candidates-listing.php">Candidates Listing</a></li>
                                    <li><a href="candidates-profile.php">Candidates Profile</a></li>
                                    <li><a href="create-resume.php">Create Resume</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog-grid.php">Blogs</a></li>
                                    <li><a href="blog-sidebar.php">Blog Sidebar</a></li>
                                    <li><a href="blog-details.php">Blog Details</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Employers</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="employers-list.php">Employers List</a></li>
                                    <li><a href="company-detail.php">Company Detail</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> User Pages</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="signup.php">Signup</a></li>
                                    <li><a href="recovery_passward.php">Forgot Password</a></li>
                                </ul>  
                            </li>
                            <li><a href="components.php"> Components</a></li>
                        </ul>
                    </li>-->
                    <?php
                    
                        if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'user' && isset($_SESSION['id'])) 
                        {
                            echo'
                                    <li><a href="create-resume.php">Upload Resume</a></li>
                                    <li><a href="faq.php">Faqs</a></li>
                                ';
                        }
                        else
                        {
                            echo'
                            <li><a href="faq.php">Faqs</a></li>
                            ';
                        }

                    ?>
                    
                    
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->
   