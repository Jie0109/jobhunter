<?php
    include("header.php");

    if (!isset($_SESSION["loggedin"])) 
    {
        echo '<script>
                alert("Please login first");
                location.href = "login.php";
            </script>';
    }

    if($_SESSION['mode'] == 'user')
    {
        echo '<script>
                alert("Error 404, User cannot post ads");
                location.href = "index.php";
            </script>';
    }

    $postedid = $_SESSION['id'];
    $jlogos = $_SESSION["img"];

    $jobtitleErr = $jobtypeErr = $jobcateErr = $jobaddErr = $jobminErr = $jobmaxErr = $joblevelErr = $jobexpErr = $jobemailErr = $jobphoneErr = $jobhourErr = $jobdescErr = $jobcomnameErr = $jobstartErr = $jobendErr = "";
    $jobtitle = $jobtype = $jobcate = $jobadd = $jobmin = $jobmax = $joblevel = $jobexp = $jobemail = $jobphone = $jobhour = $jobdesc = $jobcomname = $jobstart = $jobend = "";
    date_default_timezone_set('Asia/Kuala_Lumpur');

    if(isset($_POST['posts']))
    {
        if(empty($_POST['jobcomname']))
        {
            $jobcomnameErr = "Please enter company name.";
        }
        else
        {
            $jobcomname = $_POST['jobcomname'];
        }

        if(empty($_POST['jobtitle']))
        {
            $jobtitleErr = "Please enter title.";
        }
        else
        {
            $jobtitle = $_POST['jobtitle'];
        }

        if(empty($_POST['jobtype']))
        {
            $jobtypeErr = "Please enter job type.";
        }
        else
        {
            $jobtype = $_POST['jobtype'];
        }

        if(empty($_POST['jobcate']))
        {
            $jobcateErr = "Please enter job category.";
        }
        else
        {
            $jobcate = $_POST['jobcate'];
        }

        if(empty($_POST['jobadd']))
        {
            $jobaddErr = "Please enter job address.";
        }
        else
        {
            $jobadd = $_POST['jobadd'];
        }

        if(empty($_POST['jmin']))
        {
            $jobminErr = "Please enter amount.";
        }
        else
        {
            $jobmin = $_POST['jmin'];
        }

        if(empty($_POST['jmax']))
        {
            $jobmaxErr = "Please enter amount.";
        }
        else
        {
            $jobmax = $_POST['jmax'];
        }

        if($jobmin >= $jobmax)
        {
            $jobminErr = "Amount cannot more than max salary.";
        }
        
        if($jobmax <= $jobmin)
        {
            $jobmaxErr = "Amount cannot less than min salary.";
        }

        if(empty($_POST['jlevel']))
        {
            $joblevelErr = "Please enter level.";
        }
        else
        {
            $joblevel = $_POST['jlevel'];
        }

        if(empty($_POST['jlevel']))
        {
            $joblevelErr = "Please enter level.";
        }
        else
        {
            $joblevel = $_POST['jlevel'];
        }

        if(empty($_POST['jexp']))
        {
            $jobexpErr = "Please enter experience.";
        }
        else
        {
            $jobexp = $_POST['jexp'];
        }

        if(empty($_POST['jemail']))
        {
            $jobemailErr = "Please enter email.";
        }
        else
        {
            $jobemail = $_POST['jemail'];
        }

        if(empty($_POST['jphone']))
        {
            $jobphoneErr = "Please enter phone.";
        }
        else
        {
            $jobphone = $_POST['jphone'];
        }

        if(empty($_POST['jstart']))
        {
            $jobstartErr = "Please select start working hours.";
        }
        else
        {
            $jobstart = $_POST['jstart'];
        }

        if(empty($_POST['jend']))
        {
            $jobendErr = "Please select end working hours.";
        }
        else
        {
            $jobend = $_POST['jend'];
        }

        if(empty($_POST['jdesc']))
        {
            $jobdescErr = "Please enter descriptions.";
        }
        else
        {
            $jobdesc = $_POST['jdesc'];
        }

        /*function isImage($filename)
        {
            $allowed_extensions = array("jpg", "jpeg", "png", "gif");
            $file_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            return in_array($file_extension, $allowed_extensions);
        }

        $filename1 = $_FILES["img1"]["name"];
        $tempname1 = $_FILES["img1"]["tmp_name"];
        $folder1 = "images/" . $filename1;

        $upload1 = move_uploaded_file($tempname1, $folder1);*/
        
        if(empty($jobcomnameErr) && empty($jobtitleErr) && empty($jobtypeErr) && empty($jobcateErr) && empty($jobaddErr) && empty($jobminErr) && empty($jobmaxErr) && empty($joblevelErr) && empty($jobexpErr) && empty($jobemailErr) && empty($jobphoneErr) && empty($jobstartErr) && empty($jobendErr)  && empty($jobdescErr))
        {
            $checkC = "SELECT * FROM job WHERE jcomname = '$jobcomname' AND jname = '$jobtitle' AND jtype = '$jobtype'";
            $resultC = mysqli_query($link, $checkC);
            if (mysqli_num_rows($resultC) > 0)
            {
                echo '<script>
                    alert("The job cannot be uploaded due to conflicts with other ads.");
                    location.href = "post-a-job.php";
                </script>';
            }
            else
            {
                $activeTimeFrame = date('Y-m-d H:i:s'); 
                $sql = "INSERT INTO job (jcomname, jname, jtype, jcate, jadd, jminsalary, jmaxsalary, jlevel, jexp, jemail, jphone, jstart, jend, jdesc, jlogo, time, posted, status)
                VALUES ('$jobcomname', '$jobtitle','$jobtype', '$jobcate', '$jobadd', $jobmin, $jobmax, '$joblevel', '$jobexp', '$jobemail', '$jobphone', '$jobstart', '$jobend', '$jobdesc', '$jlogos', '$activeTimeFrame', '$postedid', 'Active')";
    
                if(mysqli_query($link, $sql))
                {
                    echo '<script>
                        alert("Your hiring post have been posted");
                        location.href = "job-list.php";
                    </script>';
                }
            } 

            
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
                        <h4 class="text-uppercase title mb-4">Create A new Job</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Post A Job</span> 
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
                                <h4 class="text-dark mb-3">Post a New Job :</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Company Name</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="Company Name" name="jobcomname" value="<?=$_SESSION["uname"]?>" readonly>
                                            <span class="invalid-feedback d-block"><?php echo $jobcomnameErr; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Title<span style="color: red;">*</span></label>
                                            <input id="title-name" type="text" class="form-control resume" placeholder="Web Application" name="jobtitle">
                                            <span class="invalid-feedback d-block"><?php echo $jobtitleErr; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Type<span style="color: red;">*</span></label>
                                            <div class="form-button">
                                                <select name="jobtype" class="nice-select rounded">
                                                    <option value="" disabled selected>Select job type</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $jobtypeErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Category<span style="color: red;">*</span></label>
                                            <div class="form-button">
                                                <select name="jobcate" class="nice-select rounded">
                                                    <option value="" disabled selected>Select Category</option>
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
                                                <span class="invalid-feedback d-block"><?php echo $jobcateErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Address</label>
                                            <input id="city" type="text" class="form-control resume" name="jobadd" value="<?=$_SESSION["place"]?>" readonly>
                                            <span class="invalid-feedback d-block"><?php echo $jobaddErr; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Minimum Salary (RM)<span style="color: red;">*</span></label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="8000" name="jmin">
                                            <span class="invalid-feedback d-block"><?php echo $jobminErr; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Salary (RM)<span style="color: red;">*</span></label>
                                            <input id="maximum-salary" type="text" class="form-control resume" placeholder="10000" name="jmax">
                                            <span class="invalid-feedback d-block"><?php echo $jobmaxErr; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Education Level<span style="color: red;">*</span></label>
                                            <div class="form-button">
                                                <select name="jlevel" class="nice-select rounded">
                                                    <option value="" disabled selected>Select level</option>
                                                    <option value="None">None</option>
                                                    <option value="STPM">STPM</option>
                                                    <option value="Foundation">Foundation</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Degree">Degree</option>
                                                    <option value="Master">Master</option>
                                                    <option value="PhD">PhD</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $joblevelErr; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Year of Experience<span style="color: red;">*</span></label>
                                            <div class="form-button">
                                                <select name="jexp" class="nice-select rounded">
                                                    <option value="" disabled selected>Select experience</option>
                                                    <option value="None">None</option>
                                                    <option value="1 Year">1 Year</option>
                                                    <option value="2 Year">2 Year</option>
                                                    <option value="3 Year">3 Year</option>
                                                    <option value="More than 3 Year">More than 3 Year</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $jobexpErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Website</label>
                                            <input id="url" type="url" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Email Address</label>
                                            <input id="email-address" type="text" class="form-control resume" placeholder="JohnDoe@gmail.com" name="jemail" value="<?=$_SESSION["email"]?>" readonly>
                                            <span class="invalid-feedback d-block"><?php echo $jobemailErr; ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Phone Number<span style="color: red;">*</span></label>
                                            <input id="number" type="text" class="form-control resume" placeholder="60123456789" name="jphone" pattern="\d{12}" required>
                                            <span id="phoneError" class="error"></span>
                                            <span class="invalid-feedback d-block"><?php echo $jobphoneErr; ?></span>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Working Hours<span style="color: red;">*</span></label>
                                            <div class="form-button">
                                                <select name="jstart" class="nice-select rounded">
                                                    <option value="" disabled selected>Start</option>
                                                    <option value="1 AM">1 AM</option>
                                                    <option value="2 AM">2 AM</option>
                                                    <option value="3 AM">3 AM</option>
                                                    <option value="4 AM">4 AM</option>
                                                    <option value="5 AM">5 AM</option>
                                                    <option value="6 AM">6 AM</option>
                                                    <option value="7 AM">7 AM</option>
                                                    <option value="8 AM">8 AM</option>
                                                    <option value="9 AM">9 AM</option>
                                                    <option value="10 AM">10 AM</option>
                                                    <option value="11 AM">11 AM</option>
                                                    <option value="12 PM">12 PM</option>
                                                    <option value="1 PM">1 PM</option>
                                                    <option value="2 PM">2 PM</option>
                                                    <option value="3 PM">3 PM</option>
                                                    <option value="4 PM">4 PM</option>
                                                    <option value="5 PM">5 PM</option>
                                                    <option value="6 PM">6 PM</option>
                                                    <option value="7 PM">7 PM</option>
                                                    <option value="8 PM">8 PM</option>
                                                    <option value="9 PM">9 PM</option>
                                                    <option value="10 PM">10 PM</option>
                                                    <option value="11 PM">11 PM</option>
                                                    <option value="12 AM">12 AM</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $jobstartErr; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted"><!--Year of Experience<span style="color: red;">*</span>--></label>
                                            <div class="form-button">
                                                <select name="jend" class="nice-select rounded">
                                                    <option value="" disabled selected>End</option>
                                                    <option value="1 AM">1 AM</option>
                                                    <option value="2 AM">2 AM</option>
                                                    <option value="3 AM">3 AM</option>
                                                    <option value="4 AM">4 AM</option>
                                                    <option value="5 AM">5 AM</option>
                                                    <option value="6 AM">6 AM</option>
                                                    <option value="7 AM">7 AM</option>
                                                    <option value="8 AM">8 AM</option>
                                                    <option value="9 AM">9 AM</option>
                                                    <option value="10 AM">10 AM</option>
                                                    <option value="11 AM">11 AM</option>
                                                    <option value="12 PM">12 PM</option>
                                                    <option value="1 PM">1 PM</option>
                                                    <option value="2 PM">2 PM</option>
                                                    <option value="3 PM">3 PM</option>
                                                    <option value="4 PM">4 PM</option>
                                                    <option value="5 PM">5 PM</option>
                                                    <option value="6 PM">6 PM</option>
                                                    <option value="7 PM">7 PM</option>
                                                    <option value="8 PM">8 PM</option>
                                                    <option value="9 PM">9 PM</option>
                                                    <option value="10 PM">10 PM</option>
                                                    <option value="11 PM">11 PM</option>
                                                    <option value="12 AM">12 AM</option>
                                                </select>
                                                <span class="invalid-feedback d-block"><?php echo $jobendErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Description<span style="color: red;">*</span></label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder="We are seeking an IT Support Specialist to provide technical assistance and support to our employees. The role involves troubleshooting hardware, software, and network issues, maintaining IT infrastructure, and assisting with technology implementations." name="jdesc"></textarea>
                                            <span class="invalid-feedback d-block"><?php echo $jobdescErr; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="input-box mb-20">
                                                        <label>Company Logo<span style="color: red;">*</span></label><br>
                                                        <input type="file" name="img1" required>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>-->

                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <input type="submit" name="posts" class="btn btn-primary" value="Post a Job">
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

    <script>
        document.getElementById('number').addEventListener('input', function (e) {
            let value = e.target.value;
            if (!/^\d*$/.test(value)) {
                e.target.value = value.replace(/\D/g, '');
            }
            if (value.length > 12) {
                e.target.value = value.slice(0, 12);
            }
        });

        document.getElementById('registrationForm').addEventListener('submit', function (e) {
            let phoneNumber = document.getElementById('number').value;
            if (phoneNumber.length !== 12) {
                e.preventDefault();
                document.getElementById('phoneError').textContent = 'Phone number must be exactly 12 digits.';
                Swal.fire({
                    title: 'Invalid Phone Number',
                    text: 'Phone number must be exactly 12 digits.',
                    icon: 'error'
                });
            }
        });
    </script>

</body>
</html>