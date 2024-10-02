<?php
    include("header.php");

    $jobexpErr = $joblvlErr = $jcapErr = $jmainErr = $jrateErr = "";
    $jobexp = $joblvl = $jcap = $jmain = $jrate = "";
    $multi = $base = "";

    if(isset($_POST['posts']))
    {
        if(empty($_POST['jexp']))
        {
            $jobexpErr = "Please select an options.";
        }
        else
        {
            $jobexp = $_POST['jexp'];
        }

        if(empty($_POST['jlvl']))
        {
            $joblvlErr = "Please select an options.";
        }
        else
        {
            $joblvl = $_POST['jlvl'];
        }

        if(empty($_POST['jmain']))
        {
            $jmainErr = "Please select an options.";
        }
        else
        {
            $jmain = $_POST['jmain'];
        }

        if(empty($_POST['jcap']))
        {
            $jcapErr = "Please select an options.";
        }
        else
        {
            $jcap = $_POST['jcap'];
        }

        if(empty($_POST['jrate']))
        {
            $jrateErr = "Please select an options.";
        }
        else
        {
            $jrate = $_POST['jrate'];
        }

        if(empty($jobexpErr) && empty($joblvlErr) && empty($jmainErr) && empty($jrateErr) && empty($jrateErr))
        {
            if($joblvl == "Foundation")
            {
                $multi = 1.1;
            }
            else if($joblvl == "Diploma")
            {
                $multi = 1.2;
            }
            else if($joblvl == "Degree")
            {
                $multi = 1.4;
            }
            else if($joblvl == "Degree")
            {
                $multi = 1.6;
            }
            else if($joblvl == "PhD")
            {
                $multi = 1.8;
            }
            else if($joblvl == "None")
            {
                $multi = 1;
            }

            if($jmain == "Systems Analyst")
            {
                $base = 3500;
            }
            else if($jmain == "Database Administrator")
            {
                $base = 4800;
            }
            else if($jmain == "Software Engineer")
            {
                $base = 4000;
            }
            else if($jmain == "Business Analyst")
            {
                $base = 4400;
            }
            else if($jmain == "Computer Support Specialist")
            {
                $base = 2600;
            }
            else if($jmain == "IT Coordinator")
            {
                $base = 4300;
            }
            else if($jmain == "Cybersecurity")
            {
                $base = 4000;
            }
            else if($jmain == "Software Architect")
            {
                $base = 3800;
            }
            else if($jmain == "Web Developer")
            {
                $base = 4100;
            }
            else if($jmain == "Data Scientist")
            {
                $base = 5800;
            }
            else if($jmain == "Software Developer")
            {
                $base = 4300;
            }
            else if($jmain == "Network Engineer")
            {
                $base = 4400;
            }
            else if($jmain == "Network Administrator")
            {
                $base = 3700;
            }
            else if($jmain == "User Experience Designer")
            {
                $base = 3800;
            }
            else if($jmain == "Cloud Engineer")
            {
                $base = 6500;
            }
            else if($jmain == "Information Security Analyst")
            {
                $base = 3500;
            }
            else if($jmain == "IT Technician")
            {
                $base = 2100;
            }
            else if($jmain == "Computer and Information System Manager")
            {
                $base = 5500;
            }
            else if($jmain == "None")
            {
                $base = 1500;
            }
            
            $es = $multi * $base;

            echo "
                <script>
                Swal.fire({
                    title: 'Quotation',
                    text: 'Your quotation for estimated salary is RM $es',
                    icon: 'success',
                }).then(function() {
                location.href = 'getQuote.php'
                })
                </script>";
        }
    }
?>

    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Get A Quotation</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Get A Quote</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <form method="post" name="contact-form" id="contact-form3" enctype="multipart/form-data">
                                <h4 class="text-dark mb-3">Get your quotation :</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">How long is your work experience?</label>
                                            <div class="form-button">
                                                <select name="jexp" class="nice-select rounded">
                                                    <option data-display=""></option>
                                                    <option value="None">None</option>
                                                    <option value="Less than 1 year">Less than 1 year</option>
                                                    <option value="1 to 3 year">1 to 3 year</option>
                                                    <option value="More than 3 year">More than 3 year</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $jobexpErr; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">What is your level of study?</label>
                                            <div class="form-button">
                                                <select name="jlvl" class="nice-select rounded">
                                                    <option data-display=""></option>
                                                    <option value="None">None</option>
                                                    <option value="Foundation">Foundation</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Degree">Degree</option>
                                                    <option value="Master">Master</option>
                                                    <option value="PhD">PhD</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $joblvlErr; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">What is your main speciality?</label>
                                            <div class="form-button">
                                                <select id="jmain-select" name="jmain" class="nice-select rounded">
                                                    <option data-display="" value=""></option>
                                                    <option value="None">None</option>
                                                    <option value="Systems Analyst">Systems Analyst</option>
                                                    <option value="Database Administrator">Database Administrator</option>
                                                    <option value="Software Engineer">Software Engineer</option>
                                                    <option value="Business Analyst">Business Analyst</option>
                                                    <option value="Computer Support Specialist">Computer Support Specialist</option>
                                                    <option value="IT Coordinator">IT Coordinator</option>
                                                    <option value="Cybersecurity">Cybersecurity</option>
                                                    <option value="Software Architect">Software Architect</option>
                                                    <option value="Web Developer">Web Developer</option>
                                                    <option value="Data Scientist">Data Scientist</option>
                                                    <option value="Software Developer">Software Developer</option>
                                                    <option value="Network Engineer">Network Engineer</option>
                                                    <option value="Network Administrator">Network Administrator</option>
                                                    <option value="User Experience Designer">User Experience Designer</option>
                                                    <option value="Cloud Engineer">Cloud Engineer</option>
                                                    <option value="Information Security Analyst">Information Security Analyst</option>
                                                    <option value="IT Technician">IT Technician</option>
                                                    <option value="Computer and Information System Manager">Computer and Information System Manager</option>
                                                    <option value="Computer Programmer">Computer Programmer</option>
                                                    <option value="IT Security Specialist">IT Security Specialist</option>
                                                    <option value="QA Analyst">QA Analyst</option>
                                                    <option value="Sales Engineer">Sales Engineer</option>
                                                    <option value="IT Support">IT Support</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $jmainErr; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">How is your capability of adapting new environment and new things?</label>
                                            <div class="form-button">
                                                <select name="jcap" class="nice-select rounded">
                                                    <option data-display=""></option>
                                                    <option value="Poor">Poor</option>
                                                    <option value="Average">Average</option>
                                                    <option value="Good">Good</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $jcapErr; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">How do you rate yourself when you are asked about knowledge of IT?</label>
                                            <div class="form-button">
                                                <select name="jrate" class="nice-select rounded">
                                                    <option data-display=""></option>
                                                    <option value="Poor">Poor</option>
                                                    <option value="Average">Average</option>
                                                    <option value="Good">Good</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $jrateErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                
                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <input type="submit" name="posts" class="btn btn-primary" value="Submit">
                                        <!--<a href="#" class="btn btn-primary">Post a Job</a>-->
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A JOB END -->

    <!-- subscribe start 
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-start position-relative notification-icon me-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Your Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
     subscribe end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/logo-light.png" height="20" alt=""></a>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissim os ducimus qui blanditiis praesentium</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Company</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Media & Press</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Career</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Marketing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> CEOs </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Agencies</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Our Apps</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Resources</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Support</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Monday - Friday : 9:00 to 17:00</li>
                        <li class="mt-2">Saturday : 10:00 to 15:00</li>
                        <li class="mt-2">Sunday : Day Off (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2019 -2020 Jobya. Design with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

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