<?php
    include("header.php");

    $sql = "SELECT * FROM job WHERE jid = ". $_GET['jid'];
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    $aidd = $_SESSION['id'];
    $jobid = $_GET['jid'];

    if(isset($_POST['send']))
    {
        $test = $_POST['resumeopt'];

        if($test == "Resume")
        {
            echo '<script>
                alert("Please select an resume");
                location.href = "applyJob.php?jid='.$_GET['jid'].'";
            </script>';
        }
        else
        {
            $asql = "INSERT INTO applicant (userid, resume, jobid, stat) VALUES ('$aidd', '$test', '$jobid', 'Pending')";
            if(mysqli_query($link, $asql))
            {
                echo '<script>
                    alert("Your resume had submitted.");
                    location.href = "job-list.php";
                </script>';
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
                        <h4 class="text-uppercase title mb-4">Apply a Job</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li> 
                            <li><a href="#" class="text-uppercase font-weight-bold">Candidates</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Apply a Job</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- CREATE RESUME START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-dark">Applying for: </h5>
                </div>
 
                <div class="col-12 mt-3">

                        <img src="images/<?=$row['jlogo']?>" class="img-fluid avatar avatar-medium d-block mx-auto rounded-pill" alt="">
                        <form>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Company Name :</label>
                                        <input id="first-name" type="text" name="name" class="form-control resume" value="<?=$row['jcomname']?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Location :</label>
                                        <input id="middle-name" type="text" class="form-control resume" value="<?=$row['jadd']?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Contact Number :</label>
                                        <input id="surname-name" type="text" class="form-control resume" value="<?=$row['jphone']?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Salary :</label>
                                        <input id="date-of-birth" type="text" class="form-control resume" value="<?=$row['jminsalary']?> - <?=$row['jmaxsalary']?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Working Experience :</label>
                                        <input id="date-of-birth" type="text" class="form-control resume" value="<?=$row['jexp']?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Working Hours :</label>
                                        <input id="date-of-birth" type="text" class="form-control resume" value="<?=$row['jtime']?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h5 class="text-dark">Resume :</h5>
                </div>

                <form method="post">
                    <div class="col-12 mt-3">
                        <div class="custom-form p-4 border rounded">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Choose a resume</label>
                                        <div class="form-button">
                                            <select name="resumeopt" class="nice-select rounded" required>
                                                <option value="" disabled selected>Select a resume</option>
                                                <?php
                    
                                                    $sqls = "SELECT * FROM resume WHERE uids = " . $_SESSION['id'];
                                                    $results = mysqli_query($link, $sqls);
                                                    if(mysqli_num_rows($results)>0)
                                                    {
                                                        while($row = mysqli_fetch_assoc($results))
                                                        {
                                                            echo'<option value="'.$row['rid'].'">'.$row['resume'].'</option>';
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo '<script>
                                                                alert("Please upload atleast one resume before applying jobs");
                                                                location.href = "upload-resume.php";
                                                            </script>';
                                                    }
                                                ?>

                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-12 mt-4">
                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Submit Resume">
                    </div>
                    </form>
                    
                </div>
                
            </div>

            <!--<div class="row">
                <div class="col-lg-12">
                    <h5 class="text-dark mt-5">Education Details :</h5>
                </div>

                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Graduation</label>
                                        <input id="graduation" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">University/College</label>
                                        <input id="university/college" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Degree/Certification</label>
                                        <input id="degree/certification" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Level</label>
                                                <div class="form-button">
                                                    <select class="nice-select rounded">
                                                        <option data-display="Select">Select</option>
                                                        <option value="1">Level-1</option>
                                                        <option value="2">Level-2</option>
                                                        <option value="3">Level-3</option>
                                                        <option value="4">Level-4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Course Title</label>
                                                <input id="course-title" type="text" class="form-control resume" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>Additional Information :</label>
                                        <textarea id="addition-information" rows="4" class="form-control resume" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>-->

            <!--<div class="row">
                <div class="col-12 mt-5">
                    <h5 class="text-dark">Work Experience :</h5>
                </div>

                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Company Name</label>
                                        <input id="company-name" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Job Position</label>
                                        <input id="job-position" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Location</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Search">Search</option>
                                                <option value="1">New York</option>
                                                <option value="2">Los Angeles</option>
                                                <option value="3">Chicago</option>
                                                <option value="4">Houston</option>
                                                <option value="5">Indiana</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Date From</label>
                                                <input id="date-from" type="text" class="form-control resume" placeholder="01-Jan-2018">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Date To</label>
                                                <input id="date-to" type="text" class="form-control resume" placeholder="31-March-2019">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>Additional Information :</label>
                                        <textarea id="addition-information-1" rows="4" class="form-control resume" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>-->
            

            <!--<div class="row">
                <div class="col-12 mt-5">
                    <h5 class="text-dark">Skills :</h5>
                </div>
                
                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Skills</label>
                                        <input id="skills" type="text" class="form-control resume" placeholder="HTML, CSS, PHP, javascript, ...">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Skill proficiency</label>
                                        <input id="skill_proficiency" type="text" class="form-control resume" placeholder="75%">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                
            </div>-->
        </div>
    </section>
    <!-- CREATE RESUME END -->

    <!-- subscribe start -->
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
    <!-- subscribe end -->

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

<?php
// Database connection settings
$host = "localhost";
$dbname = "jobhunter";
$username = "root";
$password = " ";

// Establish database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["video_resume"])) {
    // Directory where uploaded videos will be saved
    $uploadDirectory = "uploads/";

    // Get file name
    $fileName = $_FILES["video_resume"]["name"];
    
    // Get file type
    $fileType = $_FILES["video_resume"]["type"];

    // Temporary file location
    $tempFile = $_FILES["video_resume"]["tmp_name"];

    // Generate a unique name for the video resume file
    $uniqueFileName = uniqid() . '_' . $fileName;

    // Move the uploaded file to the uploads directory
    $destination = $uploadDirectory . $uniqueFileName;
    if (move_uploaded_file($tempFile, $destination)) {
        // Prepare SQL statement
        $stmt = $pdo->prepare("INSERT INTO users_upload (user_id, file_name, file_type, file_path) VALUES (:user_id, :file_name, :file_type, :file_path)");
        
        // Bind parameters
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":file_name", $fileName);
        $stmt->bindParam(":file_type", $fileType);
        $stmt->bindParam(":file_path", $destination);
        
        // Get user ID (assuming it's stored in a session variable)
        session_start();
        $user_id = $_SESSION["user_id"]; // Change this to get the user ID from your session
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Video resume uploaded successfully!";
        } else {
            echo "Error uploading video resume.";
        }
    } else {
        echo "Error moving uploaded file.";
    }
}
?>
