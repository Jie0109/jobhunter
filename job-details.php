<?php
    include("header.php");

    if (!isset($_SESSION["loggedin"])) 
    {
        echo '<script>
                alert("Please login first");
                location.href = "login.php";
            </script>';
    }

    if(isset($_GET["jid"])) 
    {
        $sql = "SELECT u.*, j.* FROM users u JOIN job j ON u.id = j.posted WHERE j.jid = " . $_GET["jid"];
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    $checkj = "SELECT * FROM job";
    $resultj = mysqli_query($link, $checkj);
    $rowj = mysqli_fetch_assoc($resultj);


    if(isset($_SESSION["mode"]) && $_SESSION["mode"] == 'com') {
        if(isset($_GET['pid']) && $_GET['pid'] == $_SESSION["id"]) {
            // Allow access
        } else {
            echo '<script>
                    alert("This job is not posted by you.");
                    location.href = "job-list.php";
                </script>';
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
                        <h4 class="text-uppercase title mb-4">Job Detail</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Jobs</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Job Detail</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- JOB DETAILS START -->
    <section class="section">
        <div class="container">
            <!--<div class="row">
                <div class="col-lg-12">
                    <h4 class="text-dark mb-3"><?=$row['jname']?></h4>
                </div>
            </div>-->

            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="job-detail border rounded p-4">
                        <div class="job-detail-content">
                            <img src="images/<?=$row['jlogo']?>" alt="" class="img-fluid float-start me-md-3 me-2 d-block" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="job-detail-com-desc overflow-hidden d-block">
                                <h4 class="mb-2"><a href="#" class="text-dark"><?=$row['jname']?></a></h4>
                                <p class="text-muted mb-0"><i class="mdi mdi-link-variant me-2"></i><?=$row['jcomname']?></p>
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker me-2"></i><?=$row['jadd']?></p>
                            </div>
                        </div>
                        <div class="job-detail-desc mt-4">
                            <p class="text-muted mb-3"><?=$row['ocup']?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Job Description :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3"><?=$row['jdesc']?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Working Hours :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3"><?=$row['jstart']?> to <?=$row['jend']?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Qualification :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2"><?=$row['jlevel']?></p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2"><?=$row['jexp']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Primary Responsibilities :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">HTML, CSS & Scss</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Javascript</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">PHP</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Photoshop</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-0">Illustrator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
                    <div class="job-detail border rounded p-4">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-map-marker me-2"></i>Location</h5>

                        <div class="job-detail-location pt-4 border-top">
                            <div class="job-details-desc-item">
                                <div class="float-start me-2">
                                    <i class="mdi mdi-bank text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: <?=$row['jadd']?></p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-start me-2">
                                    <i class="mdi mdi-email text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: <?=$row['jemail']?></p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-start me-2">
                                    <i class="mdi mdi-web text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: https://www.WebThemes.com</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-start me-2">
                                    <i class="mdi mdi-cellphone-iphone text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: <?=$row['jphone']?></p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-start me-2">
                                    <i class="mdi mdi-currency-usd text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: &#82;&#77 <?=$row['jminsalary']?> - <?=$row['jmaxsalary']?></p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-start me-2">
                                    <i class="mdi mdi-security text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: <?=$row['jexp']?></p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-start me-2">
                                    <i class="mdi mdi-clock-outline text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: <?=$row['time']?></p>
                            </div>

                            <h6 class="text-dark f-17 mt-3 mb-0">Share Job :</h6>
                            <ul class="social-icon list-inline mt-3 mb-0">
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!--<div class="job-detail border rounded mt-4 p-4">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-clock-outline me-2"></i>Opening Hours</h5>

                        <div class="job-detail-time border-top pt-4">
                            <ul class="list-inline mb-0">
                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Monday</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Tuesday</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Wednesday</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Thursday</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Friday</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Saturday</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">6:30AM - 1PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted pb-0">
                                    <div class="float-start">Sunday</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">Closed</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>-->

                    <?php

                        $count = "SELECT COUNT(*) AS total_applicants FROM applicant WHERE jobid = ".$_GET["jid"]." AND stat ='Pending'";
                        $rcount = mysqli_query($link, $count);
                        $rrow = mysqli_fetch_assoc($rcount);

                        $status = "SELECT * FROM job WHERE jid = ".$_GET["jid"];
                        $ss = mysqli_query($link, $status);
                        $srow = mysqli_fetch_assoc($ss);

                        if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'user' && isset($_SESSION['id'])) 
                        {
                            if($srow['status'] == "Inactive")
                            {
                                echo '<script>
                                        alert("This job have been unlisted by the company.");
                                        location.href = "job-list.php";
                                    </script>';
                            }
                            else
                            {
                                $userss = $_SESSION['id'];
                                
                                $applyBtn = "SELECT * FROM applicant  WHERE userid = '$userss' AND stat = 'Pending' AND jobid = ".$_GET["jid"];
                                $applyresult = mysqli_query($link, $applyBtn);
                                if(mysqli_num_rows($applyresult) === 1)
                                {
                                    echo' 
                                    <div class="job-detail border rounded mt-4">
                                        <a href="#" class="btn btn-success btn-block">You have already applied this job.</a>
                                    </div>
                                    ';
                                }
                                else
                                {
                                    echo' 
                                    <div class="job-detail border rounded mt-4">
                                        <a href="applyJob.php?jid='.$row['jid'].'" class="btn btn-primary btn-block">Apply For Job</a>
                                    </div>
                                ';
                                }
                                
                                
                            }
                            
                        }
                        else if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'com' && isset($_SESSION['id'])) 
                        {
                            if(isset($_POST['makeoff']))
                            {
                                $sqlm = "UPDATE job SET status = 'Inactive' WHERE jid =" . $_GET["jid"] ;
                                if(mysqli_query($link, $sqlm))
                                {
                                    echo '<script>
                                            alert("The job is archived.");
                                            location.href = "job-details.php?jid=' .($_GET["jid"]) . '&pid='. $_SESSION["id"] .'";
                                        </script>';
                                }
                                
                            }
                            else if(isset($_POST['makeon']))
                            {
                                $sqln = "UPDATE job SET status = 'Active' WHERE jid =" . $_GET["jid"];
                                if(mysqli_query($link, $sqln))
                                {
                                    echo '<script>
                                            alert("The job is posted.");
                                            location.href = "job-details.php?jid=' .($_GET["jid"]) . '&pid='. $_SESSION["id"] .'";
                                        </script>';
                                }
                            }else if(isset($_POST['delete']))
                            {
                                $jid = $_GET['jid'];

                                $checkA = "SELECT * FROM applicant WHERE jobid = $jid";
                                $resultA = mysqli_query($link, $checkA);
                                if(mysqli_num_rows($resultA) > 0)
                                {
                                    echo '<script>
                                            alert("You must remove all the applicant before delete job.");
                                            location.href = "job-details.php?jid='.$jid.'";
                                        </script>';
                                }
                                else
                                {
                                    $sqln = "DELETE FROM job WHERE jid = $jid";
                                    if(mysqli_query($link, $sqln))
                                    {
                                        echo '<script>
                                                alert("You had deleted the job.");
                                                location.href = "job-list.php"
                                            </script>';
                                    }
                                }

                                
                            }

                            echo'
                            <form class="login-form" method="post">';
                            if($srow['status'] == 'Active')
                            {
                                echo'
                                
                                <div class="job-detail border rounded mt-4">
                                <b>Tips: Click to archieve the job.</b>
                                        <input type="submit" class="btn btn-primary btn-block" name="makeoff" value="' . $srow['status'] . '">
                                    </div>';
                            }
                            else if($srow['status'] == 'Inactive')
                            {
                                echo'
                                
                                    <div class="job-detail border rounded mt-4">
                                        <b>Tips: Click to post the job.</b>
                                        <input type="submit" class="btn btn-danger btn-block" name="makeon" value="' . $srow['status'] . '">
                                    </div>
                                    <div class="job-detail border rounded mt-4">
                                        <b>Tips: Once action done cannot revert.</b>
                                        <input type="submit" class="btn btn-warning btn-block" name="delete" value="Delete">
                                    </div>';
                            }
                                
                            echo'</form>
                            <div class="job-detail border rounded mt-4">
                                <a href="candidates-listing.php?jid='.$row['jid'].'" class="btn btn-primary btn-block">View Applicant('.$rrow['total_applicants'].')</a>
                            </div>
                            ';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- JOB DETAILS END -->

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
    s ubscribe end -->

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