<?php
    include("header.php");

    $upid = $_SESSION['id'];

    if(isset($_POST['send']))
    {
        $targetfolder = "resume/";
        $filename1 = $_FILES['file']['name'];
        $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
    
        $ok=1;
    
        $file_type=$_FILES['file']['type'];
    
        if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {
    
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
        {
            $sql = "INSERT INTO resume (uids, resume, type, act) VALUES ('$upid', '$filename1', 'pdf', 'Active')";
            if(mysqli_query($link, $sql))
            {
                echo '<script>
                    alert("Your resume is uploaded");
                    location.href = "candidates-profile.php";
                </script>';
            }
            
        }
        else 
        {
            echo '<script>
                alert("Problem uploading files");
                location.href = "upload-resume.php";
            </script>';
        }
    
        }
    
        else 
        {
            echo '<script>
                    alert("You may only upload PDFs, JPEGs or GIF files.<br>");
                    location.href = "upload-resume.php";
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
                        <h4 class="text-uppercase title mb-4">upload Resume</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li> 
                            <li><a href="#" class="text-uppercase font-weight-bold">Candidates</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Upload Resume</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <div style="margin-top: 30px; text-align: center;">
        <a href="create-resume.php" class="btn btn-primary">Upload Video Resume</a> or <a href="upload-resume.php" class="btn btn-primary">Upload PDF Resume</a>
    </div>
    <!-- CREATE RESUME START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-dark">PDF Resume :</h5>
                </div>
                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <div class="container">
                            <div class="row">
                            <form action="" method="post" enctype="multipart/form-data">
                                <label for="file">Choose file:</label>
                                <input type="file" name="file" id="file" accept=".pdf" size="50"required>
                                <div class="col-12 mt-4">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Upload Resume">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CREATE RESUME END -->

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
