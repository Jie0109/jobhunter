<?php
    include("header.php");

    if (!isset($_SESSION['id'])) {
        echo '<script>
                alert("Please login or register to view this page.");
                location.href = "login.php";
            </script>';
    }

    $sql = "SELECT * FROM users WHERE id = ".$_SESSION['id'];
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    $salary = $from = $ocup = "";
    $salaryErr = $fromErr = $ocupErr = "";
    $over = "";
    $overErr = "";

    if(isset($_POST['save']))
    {
        if(empty($_POST['from']))
        {
            $fromErr = "Please enter a name.";
        }
        else
        {
            $from = $_POST['from'];
        }

        if(empty($_POST['ocup']))
        {
            $ocupErr = "Please enter your phone number.";
        }
        else
        {
            $ocup = $_POST['ocup'];
        }

        if(empty($_POST['salary']))
        {
            $salaryErr = "Please enter your salary.";
        }
        else
        {
            $salary = $_POST['salary'];
        }

        if(empty($salaryErr) && empty($ocupErr) && empty($fromErr))
        {
            $sql = "UPDATE users SET username = '$from', ocup = '$ocup', salary = '$salary' WHERE id = " . $_SESSION['id'];
            if(mysqli_query($link, $sql))
            {
                echo '<script>
                    alert("Profile updated.");
                    location.href = "candidates-profile.php";
                </script>';
            }
        }
    }

    if(isset($_POST['saved']))
    {
        if(empty($_POST['over']))
        {   
            $overErr = "Please enter overview.";
        }
        else
        {
            $over = $_POST['over'];
        }
        
        if(empty($overErr))
        {
            $sql = "UPDATE users SET ocup = '$over' WHERE id = " . $_SESSION['id'];
            if(mysqli_query($link, $sql))
            {
                echo '<script>
                    alert("Overview updated.");
                    location.href = "candidates-profile.php";
                </script>';
            }
        }
    }

    $pw = $cpw = $npw = "";
    $pwErr = $cpwErr = $npwErr = "";
    if(isset($_POST['savepw']))
    {

        if(empty($_POST['pw']))
        {
            $pwErr = "Please enter password";
        }
        else
        {
            $pw = $_POST['pw'];
        }

        if(empty($_POST['npw']))
        {
            $npwErr = "Please enter new password";
        }
        else
        {
            $npw = $_POST['npw'];
        }

        if(empty($_POST['cpw']))
        {
            $cpwErr = "Please reenter new password";
        }
        else
        {
            $cpw = $_POST['cpw'];
        }

        if($_POST['npw'] != $_POST['cpw'])
        {
            $cpwErr = "Password did not match.";
        }

        $uppercase = preg_match('@[A-Z]@', $npw);
        $lowercase = preg_match('@[a-z]@', $npw);
        $number = preg_match('@[0-9]@', $npw);
        $specialChars = preg_match('@[^\w]@', $npw);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($npw) < 8) 
        {
            $npwErr = "Password should be at least 8 characters and include at least one uppercase letter, one lowercase letter, one number, and one special character.";
        }
        
        if(empty($pwErr) && empty($npwErr) && empty($cpwErr))
        {
            $sqls = "SELECT * FROM users WHERE id = " .$_SESSION['id'];
            $results = mysqli_query($link, $sql);
            $rows = mysqli_fetch_assoc($results);
            if($rows['password'] != $pw)
            {
                echo '<script>
                    alert("Invalid old password");
                    location.href = "candidates-profile.php";
                </script>';
            }
            else if($rows['pw'] != $pw)
            {
                $sql = "UPDATE users SET password = '$cpw' WHERE id = " .$_SESSION['id'];
                if(mysqli_query($link, $sql))
                {
                    echo '<script>
                    alert("Password updated.");
                    location.href = "candidates-profile.php";
                </script>';
                }
            }
            else
            {
                echo '<script>
                    alert("New password cannot same with old password.");
                    location.href = "candidates-profile.php";
                </script>';
            }

            
           
        }
        
    }
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <?php
                            $sql = "SELECT * FROM users WHERE id = ".$_SESSION['id'];
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_assoc($result);
                            if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'com' && isset($_SESSION['id']))
                            {
                                echo'<img src="images/'.$row['otp'].'" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">';
                            }
                            else
                            {
                                echo'<img src="images/profile.png" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">';
                            }
                        ?>
                        
                        <h5 class="text-white mb-2"><?=$row['username']?></h5>
                        <p class="text-white-50 h6 mb-2"><i class="mdi mdi-bank me-2"></i><?=$row['place']?></p>
                        <p class="text-white-50 h6 mb-2"><?=$row['ocup']?></p>
                        <p class="text-white-50 h6 mb-2"><?=$row['salary']?></p>
                        <!--<ul class="candidates-profile-icons list-inline mb-3">
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                        </ul>

                        <ul class="list-unstyled social-icon social mb-0">
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google-plus"></i></a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- CANDIDATES PROFILE START -->
    <section class="section">
        <div class="container">
            
                    <?php

                        if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'user' && isset($_SESSION['id'])) 
                        {
                            echo'
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-dark">Resume :</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mt-3">
                            <div class="border rounded p-4">
                            <form method="post">';
                               
                                    

                                    $sql = "SELECT * FROM resume WHERE act = 'Active' AND uids = ".$_SESSION['id'];
                                    $result = mysqli_query($link, $sql);
                                    $counter = 1;
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        echo'
                                        <table class="table table-bordered table-striped table-hover">
                                            <tr>
                                            <th>No.</th>
                                            <th>Resume</th>
                                            <th>Action</th>
                                            </tr>';
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $file_path = "resume/" . $row['resume'];
                                                $vids_path = "video/" . $row['resume'];
                                                echo '
                                                <tr>
                                                    <td>' . $counter . '.</td>
                                                    <td>' . $row['resume'] . '</td>
                                                    <td>';
                                                if ($row['type'] == "pdf") {
                                                    echo '<a href="' . $file_path . '" class="btn btn-primary" target="_blank">View</a>';
                                                } elseif ($row['type'] == "vid") {
                                                    echo '<a href="' . $vids_path . '" class="btn btn-primary" target="_blank">View</a>';
                                                }
                                                echo '
                                                    <form method="POST" style="display:inline;">
                                                        <input type="hidden" name="hidden_value" value="' . $row['rid'] . '">
                                                        <input type="submit" name="deletes" class="btn btn-warning" value="Delete">
                                                    </form>
                                                    </td>
                                                </tr>';
                                                $counter++;
                                            }
                                            
                                            // Processing form submission
                                            if (isset($_POST['deletes'])) {
                                                $delete = $_POST['hidden_value'];
                                                $sqln = "UPDATE resume SET act = 'Inactive' WHERE rid = $delete";
                                                if (mysqli_query($link, $sqln)) {
                                                    echo '<script>
                                                            alert("Resume deleted.");
                                                            location.href = "candidates-profile.php";
                                                          </script>';
                                                }
                                            }
                                            
                                    }
                                    else
                                    {
                                        echo'No resume found, please <a href="upload-resume.php">upload a resume</a> asap.';
                                    }
                                    echo'</table>
                                
                            <a href="upload-resume.php" class="btn btn-primary">Upload</a>
                            </form>
                            </div>
                             </div>
            </div>';
                        }
                        else
                        {

                        }
                        
                    ?>
               

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Information :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-3">
                    <?php
                        $sql = "SELECT * FROM users WHERE id = ".$_SESSION['id'];
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_assoc($result);

                        if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'user' && isset($_SESSION['id'])) 
                        {
                            
                            echo'
                            <form method="post">
                                <div class="border rounded p-4">
                                    <div class="job-detail-desc">
                                        <input id="title-name" type="text" class="form-control resume" placeholder="User name" name="from" value="'.$row['username'].'"><br>
                                        <span class="invalid-feedback d-block"><?php echo $fromErr; ?></span>
                                        <input id="title-name" type="text" class="form-control resume" placeholder="E-mail" name="email" value="'.$row['email'].'" readonly><br>
                                        <span class="invalid-feedback d-block"><?php echo $ocupErr; ?></span>
                                        <input id="title-name" type="text" class="form-control resume" placeholder="Phone Number" name="ocup" value="'.$row['ocup'].'"><br>
                                        <span class="invalid-feedback d-block"><?php echo $ocupErr; ?></span>
                                        <input id="title-name" type="text" class="form-control resume" placeholder="Expected Salary" name="salary" value="'.$row['salary'].'"><br>
                                        <span class="invalid-feedback d-block"><?php echo $salaryErr; ?></span>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <input type="submit" id="" name="save" class="submitBnt btn btn-primary" value="Save">
                                    </div>
                                </div>
                            </form>';
                        }
                        else
                        {
                            echo'
                                <div class="job-detail-desc">
                                    <input id="title-name" type="text" class="form-control resume" placeholder="Company name" name="from" value="'.$row['username'].'" readonly><br>
                                    <span class="invalid-feedback d-block"><?php echo $fromErr; ?></span>
                                    <input id="title-name" type="text" class="form-control resume" placeholder="Address" name="ocup" value="'.$row['place'].'" readonly><br>
                                    <span class="invalid-feedback d-block"><?php echo $ocupErr; ?></span>
                                    <input id="title-name" type="text" class="form-control resume" placeholder="E-mail" name="salary" value="'.$row['email'].'" readonly><br>
                                    <span class="invalid-feedback d-block"><?php echo $salaryErr; ?></span>
                                </div>
                            ';
                        }
                    ?>
                    
                </div>
            </div>

            <?php
                $sql = "SELECT * FROM users WHERE id = ".$_SESSION['id'];
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);

                if(isset($_SESSION['mode']) && $_SESSION['mode'] == 'com' && isset($_SESSION['id'])) 
                {
                    

                    echo'
                        <div class="row">
                            <div class="col-lg-12 mt-4 pt-2">
                                <h4 class="text-dark">Overview :</h4>
                            </div>
                        </div>

                        <form action="" method="post" >
                            <div class="row">
                                <div class="col-lg-12 mt-3">
                                    <div class="border rounded p-4">
                                        <div class="job-detail-desc">
                                            <textarea id="title-name" class="form-control resume" placeholder="Company overview......" name="over">'.$row['ocup'].'</textarea><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <input type="submit" id="" name="saved" class="submitBnt btn btn-primary" value="Save">
                                </div>
                            </div>
                        </form>
                                ';
                            }
            
            ?>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Password :</h4>
                </div>
            </div>

            <form method="post">
                <div class="border rounded p-4">
                    <div class="job-detail-desc">
                        <input id="op" type="password" class="form-control resume" placeholder="Old password" name="pw"><br>
                        <span class="invalid-feedback d-block"><?php echo $pwErr; ?></span>
                        <input id="np" type="password" class="form-control resume" placeholder="New password" name="npw"><br>
                        <span class="invalid-feedback d-block"><?php echo $npwErr; ?></span>
                        <input id="cnp" type="password" class="form-control resume" placeholder="Comfirm password" name="cpw"><br>
                        <span class="invalid-feedback d-block"><?php echo $cpwErr; ?></span>
                    </div>
                    <label style="cursor: pointer;"><input class="custom-control-input" style="cursor: pointer; weight:20px; height:13px;" type="checkbox"onclick="myFunction()"></label> Show Password
                    <div class="col-12 mt-4">
                        <input type="submit" id="" name="savepw" class="submitBnt btn btn-primary" value="Save">
                    </div>
                </div>
            </form>

            
            

            <!--<div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Education :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-school"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2016 - April 2017</p>
                        <p class="pb-3 mb-0">Diploma In Management Studies</p>
                        
                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-library"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2017 - April 2018</p>
                        <p class="pb-3 mb-0">Diploma In Management</p>
                        
                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-briefcase-check"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2018 - April 2019</p>
                        <p class="pb-3 mb-0">Management Of Company</p>
                        
                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Experience :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Web Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $950</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank me-2"></i>www.webthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker me-2"></i>1919 Ward Road West Nyack, NY 10994</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Web code Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">Web Developer</p>
                                    <p class="text-muted mb-0 f-16">Fab 2015 - July 2018</p>
                                    <p class="text-muted mb-0 f-16">Salary : $1100</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank me-2"></i>www.webcodeltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker me-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-5.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Brand Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $1000</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank me-2"></i>www.brandthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker me-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Small Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $900</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank me-2"></i>www.smallthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker me-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Skills :</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mt-4 pt-2">
                    <h6 class="mb-0 text-uppercase">Language Knowledge :</h6>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Spanish</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:84%;">
                                <div class="progress-value d-block text-muted h6">84%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Japanese</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:75%;">
                                <div class="progress-value d-block text-muted h6">75%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Arabic</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:79%;">
                                <div class="progress-value d-block text-muted h6">79%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">English</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:95%;">
                                <div class="progress-value d-block text-muted h6">95%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 pt-2">
                    <h6 class="mb-0 text-uppercase">Coding Expertise :</h6>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">WordPress</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:84%;">
                                <div class="progress-value d-block text-muted h6">84%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">PHP / MYSQL</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:75%;">
                                <div class="progress-value d-block text-muted h6">75%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Angular / JavaScript</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:79%;">
                                <div class="progress-value d-block text-muted h6">79%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">HTML / CSS</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:95%;">
                                <div class="progress-value d-block text-muted h6">95%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
        
    CANDIDATES PROFILE END -->
    </div>
    </section>

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
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>

    <script>
        function myFunction() 
        {
            var x = document.getElementById("op");
            var y = document.getElementById("np");
            var z = document.getElementById("cnp");

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

            if (z.type === "password") {
                z.type = "text";
            } else {
                z.type = "password";
            }
        }
        </script>
</body>
</html>