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
                        <h4 class="text-uppercase title mb-4">Contact Us</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Contact Us</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- MAP START -->
    <section class="section pt-0 bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" style="border: 0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-start">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 me-4">
                                <i class="mdi mdi-earth"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Website</h4>
                            <p class="mb-0 text-muted">Brandcode Pvt.Ltd.co.in</p>
                            <p class="mb-0 text-muted">Themescode Pvt.Ltd.co.in</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-start">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 me-4">
                                <i class="mdi mdi-cellphone-iphone"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Call us</h4>
                            <p class="mb-0 text-muted">123 456 7890</p>
                            <p class="mb-0 text-muted">123 456 7890</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-start">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 me-4">
                                <i class="mdi mdi-email"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Email</h4>
                            <p class="mb-0 text-muted">Themescodeltd@gmail.com</p>
                            <p class="mb-0 text-muted">Brandcodeltd@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

    <!-- CONTACT FORM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-dark mb-0">Get In Touch :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7 mt-4 pt-2">
                    <div class="custom-form rounded border p-4">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Name</label>
                                        <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Email address</label>
                                        <input name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Subject</label>
                                        <input type="text" class="form-control resume" id="subject" placeholder="Subject..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Message</label>
                                        <textarea name="comments" id="comments" rows="5" class="form-control resume" placeholder="Message.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4 pt-2">
                    <div class="border rounded text-center p-4">
                        <h5 class="text-dark pb-3">Contact Info</h5>
                        <div class="contact-location rounded mt-5 p-4">
                            <div class="contact-location-icon bg-white text-primary rounded-pill">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            <p class="text-muted pt-4 f-20 mb-0">2453 Clinton StreetLittle Rock, AR 72211</p>
                        </div>
                        <h6 class="text-muted mt-4 mb-0">Share</h6>
                        <ul class="list-unstyled social-icon mt-3 mb-0">
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END -->

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
    <!-- CONTACT -->
    <script src="js/contact.js"></script>

    <script src="js/app.js"></script>

</body>
</html>