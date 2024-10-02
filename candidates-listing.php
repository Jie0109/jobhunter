<?php
    
include("header.php");

?>

    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Candidates Listing</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li> 
                            <li><a href="job-details.php?jid=<?=$_GET['jid']?>" class="text-uppercase font-weight-bold">Jobs</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Candidates List</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CANDIDATES LISTING START -->
    <section class="section pt-0">
        <div class="container">
            <!--<div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results">
                        <div class="sort-button text-center float-sm-right">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mb-0 me-3">
                                    <select class="nice-select">
                                        <option data-display="Sort By">Nothing</option>
                                        <option value="1">Web Developer</option>
                                        <option value="2">PHP Developer</option>
                                        <option value="3">Web Designer</option>
                                    </select>
                                </li>

                                <li class="list-inline-item">
                                    <select class="nice-select">
                                        <option data-display="Default">Nothing</option>
                                        <option value="1">Web Developer</option>
                                        <option value="2">PHP Developer</option>
                                        <option value="3">Web Designer</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>-->

            <div class="row">
                <!--<div class="col-lg-4 col-md-4">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 text-dark">Job Type</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">   
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheckAll">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheckAll">All Type</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck22">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck22">Freelancer</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck23">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck23">Full Time</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck3">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck3">Part Time</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck4">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck4">Internship</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark">Designation</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck5">Project Manager</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck6">Web Designer</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck7">Banking</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck8">Digital & Creative</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck9">IT Contractor</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck10">Java Developer</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck11">Civil Engineert</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck12">SEO</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                    <div class="card-header" id="headingthree">
                                        <h6 class="mb-0 text-dark">Skills</h6>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck13">HTML</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck14">CSS</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck15">JavaScript</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck16">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck16">PHP</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck17">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck17">Wordpress</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck18">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck18">Photoshop</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                        <h6 class="mb-0 text-dark">Experince</h6>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio1">1Year to 2Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio2">2Year to 3Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio3">3Year to 4Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio4">4Year to 5Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio5">5Year +</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            collapse one end 

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsefive" class="job-list" aria-expanded="true" aria-controls="collapsefive">
                                    <div class="card-header" id="headingfive">
                                        <h6 class="mb-0 text-dark">Gender</h6>
                                    </div>
                                </a>
                                <div id="collapsefive" class="collapse show" aria-labelledby="headingfive">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio6">Male</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio7">Female</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio8">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            collapse one end 

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsesix" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesix">
                                    <div class="card-header" id="headingsix">
                                        <h6 class="mb-0 text-dark">Offerd Salary</h6>
                                    </div>
                                </a>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio9" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio9">$1k - $20k</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio10" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio10">$21k - $30k</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio11">$31k - $40k</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio12">$41k - $50k</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ms-1 text-muted" for="customRadio13">$51k - $60k</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             collapse one end 

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsesevan" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesevan">
                                    <div class="card-header border-bottom-0" id="headingsevan">
                                        <h6 class="mb-0 text-dark">Qualification</h6>
                                    </div>
                                </a>
                                <div id="collapsesevan" class="collapse" aria-labelledby="headingsevan">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck19">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck19">Higher Secondary</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck20">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck20">Bachelor Degree</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck21">
                                            <label class="custom-control-label ms-1 text-muted" for="customCheck21">Master Degree</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>-->
                <div class="col-lg-12 col-md-12">
                    <div class="candidates-listing-item">
                    <?php

                        $sql = "SELECT a.*, u.*, r.*, j.* FROM applicant a JOIN users u ON a.userid = u.id JOIN resume r ON a.resume = r.rid  JOIN job j ON a.jobid = j.jid WHERE a.jobid = " . $_GET['jid']." AND a.stat = 'Pending'";   
                        $result = mysqli_query($link, $sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            
                            while ($row = mysqli_fetch_assoc($result)) 
                            {  
                                $file_path = "resume/". $row['resume'];
                                $vids_path = "video/". $row['resume'];
                                echo'
                                
                                <div class="border mt-4 rounded p-3">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="float-start me-4">
                                                <img src="images/profile.png" alt="" class="d-block rounded" height="90">
                                            </div>
                                            <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                                <h5 class="mb-2"><a href="#" class="text-dark">'.$row['username'].'</a></h5>
                                                <ul class="list-unstyled">
                                                    <li class="text-muted"><i class="mdi mdi-phone me-1"></i>'.$row['ocup'].'</li>
                                                    <li class="text-muted"><a href="" class="text-muted"><i class="mdi mdi-map-marker me-1"></i>'.$row['place'].'</a></li>
                                                    <li class="text-muted">&#82;&#77 </i>'.$row['salary'].' / month</li>
                                                </ul>
                                                <p class="text-muted mt-1 mb-0">Skills : HTML, CSS, JavaScript, Wordpress, PHP, jQueary.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="candidates-list-fav-btn text-right">
                            
                                                <div class="candidates-listing-btn mt-4">
                                                    <a href="viewProfile.php?userid='.$row['userid'].'" class="btn btn-primary-outline btn-sm" target="_blank">View Profile</a>
                                                </div>';
                                                if($row['type'] == "pdf")
                                                {
                                                    echo'<div class="candidates-listing-btn mt-4">
                                                        <a href="'.$file_path.'" class="btn btn-primary-outline btn-sm" target="_blank">View Resume</a>
                                                    </div>';
                                                }
                                                else if($row['type'] == "vid")
                                                {
                                                    echo'<div class="candidates-listing-btn mt-4">
                                                        <a href="'.$vids_path.'" class="btn btn-primary-outline btn-sm" target="_blank">View Resume</a>
                                                    </div>';
                                                }
                                                
                                                if(isset($_POST['reject']))
                                                {
                                                    $hidden_value = $_POST['hidden_value'];
                                                    $reject = "UPDATE applicant SET stat = 'Rejected' WHERE aid = $hidden_value";
                                                    if(mysqli_query($link, $reject))
                                                    {
                                                        echo '<script>
                                                                alert("Applicant rejected");
                                                                location.href = "candidates-listing.php?jid='.$_GET['jid'].'";
                                                            </script>';
                                                    }
                                                    
                                                }

                                                if(isset($_POST['approve']))
                                                {
                                   

                                                    $headers = 'From: Job Hunting <rex010109@gmail.com>' . "\r\n";
                                                    $headers .= 'MIME-Version: 1.0' . "\r\n";
                                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  // Set from headers

                                                    $to      = $row['email']; // Send email to our user //$email
                                                    $subject = 'noreply-jobhunting'; // Give the email a subject 
                                                    $message = 'Congratulations, your application for '.$row['jname'].' at company '.$row['jcomname'].' have been accepted, we will contact and arrange an interview with you ASAP.';

                                                    $hidden_value = $_POST['hidden_value'];
                                                    $approve = "UPDATE applicant SET stat = 'Approved' WHERE aid = $hidden_value";
                                                    if(mysqli_query($link, $approve))
                                                    {
                                                        mail($to, $subject, $message, $headers);
                                                        echo '<script>
                                                                alert("Applicant approved");
                                                                location.href = "candidates-listing.php?jid='.$_GET['jid'].'";
                                                            </script>';
                                                    }
                                                    
                                                }
                                                echo'
                                                <form method="post">
                                                    <div class="candidates-listing-btn mt-4">

                                                        <input type="hidden" name="hidden_value" value="'.$row['aid'].'">
                                                        <input type="submit" name="approve" class="btn btn-primary-outline btn-sm" value="Approve">

                                                        <input type="hidden" name="hidden_value" value="'.$row['aid'].'">
                                                        <input type="submit" name="reject" class="btn btn-primary-outline btn-sm" value="Reject">
                                                    
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                ';
                            }
                        }
                        else
                        {
                            
                            echo '<br><p style="text-align: center; font-weight: bold; font-size: 24px;">There are no applicants at the moment.</p>';
                        
                        }

                    ?>
                        


                    <!--<nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination justify-content-center mb-0 mt-4 pt-2">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="mdi mdi-chevron-double-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="mdi mdi-chevron-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>-->
                </div>
            </div>
        </div>
    </section>
    <!-- CANDIDATES LISTING END -->

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
                    <p class="text-white mb-4 footer-list-title">Business Hours</p>
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