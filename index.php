<?php
    include("header.php");
?>

    <!-- Start Home -->
    <section class="bg-home" style="background: url('images/bg-home.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3">Find jobs, create trackable resumes and enrich your applications.</h6>
                                <h1 class="heading fw-bold mb-4">The Easiest Way to Get Your New IT Job</h1>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form class="registration-form">
                                        <div class="row">
                                            <!--<div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                                                </div>
                                            </div>-->
                                            <!--<div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-location-arrow"></i>
                                                    <select id="select-country" class="demo-default">
                                                        <option value="">Location</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">&Aring;land Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia, Plurinational State of</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei Darussalam</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">C&ocirc;te d'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic of</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                                        <option value="KR">Korea, Republic of</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States of</option>
                                                        <option value="MD">Moldova, Republic of</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="AN">Netherlands Antilles</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">R&eacute;union</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barth&eacute;lemy</option>
                                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan, Province of China</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>-->
                                            <!--<div class="col-lg-12 col-md-12">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-category" class="demo-default">
                                                        <option value="">Categories...</option>
                                                        <?php
                                                        
                                                            $sql = "SELECT cname FROM category WHERE cname IN (SELECT DISTINCT jcate FROM job)";
                                                            $resultsCate = mysqli_query($link, $sql);
                                                            if(mysqli_num_rows($resultsCate)>0)
                                                            {
                                                                while ($rowC = mysqli_fetch_assoc($resultsCate))
                                                                {
                                                                    echo'
                                                                    
                                                                        <option value="1">'.$rowC['cname'].'</option>
                                                                    
                                                                    ';
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12" style="margin-top: 5px;">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Submit">
                                                </div>
                                            </div>-->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- popular category start 
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Popular Category</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-account d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Developer</h5>
                                <p class="text-success mb-0 rounded">780 Jobs</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-desktop-classic d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Technology</h5>
                                <p class="text-success mb-0 rounded">1270 Jobs</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-bank d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Government</h5>
                                <p class="text-success mb-0 rounded">2024 Jobs</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-auto-fix d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Accounting / Finance</h5>
                                <p class="text-success mb-0 rounded">786 Jobs</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-office-building d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Construction / Facilities</h5>
                                <p class="text-success mb-0 rounded">2156 Jobs</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-telegram d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Tele-communications</h5>
                                <p class="text-success mb-0 rounded">256 Jobs</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-television-classic d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Design & Multimedia</h5>
                                <p class="text-success mb-0 rounded">585 Jobs</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-human d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Human Resource</h5>
                                <p class="text-success mb-0 rounded">548 Jobs</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 text-center mt-4 pt-2">
                    <a href="javascript:void(0)" class="btn btn-primary-outline">Browse All Categories <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
     popular category end -->

    <!-- all jobs start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Find Your Jobs</h4>
                        <!--<p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>-->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mt-4 pt-2">
                    <ul class="nav nav-pills nav nav-pills bg-white rounded nav-justified flex-column flex-sm-row" id="pills-tab" role="tablist">
                        <?php
                            
                            if(isset($_GET['type']) && $_GET['type'] == "Part Time")
                            {
                                echo'
                                <li class="nav-item">
                                    <a class="nav-link rounded active" id="part-job-tab" data-toggle="pill" href="?type=Part Time" role="tab" aria-controls="part-job" aria-selected="false">Part Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded" id="full-job-tab" data-toggle="pill" href="?type=Full Time" role="tab" aria-controls="full-job" aria-selected="false">Full Time</a>
                                </li>
                                ';
                            }
                            else if(isset($_GET['type']) && $_GET['type'] == "Full Time")
                            {
                                echo'
                                <li class="nav-item">
                                    <a class="nav-link rounded " id="part-job-tab" data-toggle="pill" href="?type=Part Time" role="tab" aria-controls="part-job" aria-selected="false">Part Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded active" id="full-job-tab" data-toggle="pill" href="?type=Full Time" role="tab" aria-controls="full-job" aria-selected="false">Full Time</a>
                                </li>
                                ';
                            }
                            else
                            {
                                echo'
                                <li class="nav-item">
                                    <a class="nav-link rounded " id="part-job-tab" data-toggle="pill" href="?type=Part Time" role="tab" aria-controls="part-job" aria-selected="false">Part Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded " id="full-job-tab" data-toggle="pill" href="?type=Full Time" role="tab" aria-controls="full-job" aria-selected="false">Full Time</a>
                                </li>
                                ';
                            }

                        ?>
                        
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                    
                                        if(isset($_GET['type']))
                                        {
                                            $checkedType = $_GET['type'];
                                            if($_GET['type'] == $checkedType)
                                            {
                                                $job = "SELECT * FROM job WHERE jtype = '$checkedType' AND status = 'Active' ORDER BY time DESC";
                                            }
                                        }
                                        else
                                        {
                                            $job = "SELECT * FROM job WHERE status = 'Active' ORDER BY time DESC";
                                        }
                                        
                                        $jresult = mysqli_query($link, $job);
                                        if(mysqli_num_rows($jresult)>0)
                                        {
                                            while($jrow = mysqli_fetch_assoc($jresult))
                                            {
                                                
                                                echo'
                                                
                                                <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                                    <div class="lable text-center pt-2 pb-2">
                                                        <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="p-4">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-2">
                                                                <div class="mo-mb-2">
                                                                    <img src="images/'.$jrow['jlogo'].'" alt="" style="width: auto; height: 100px;" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div>
                                                                    <h5 class="f-18"><a href="job-details.php?jid=' . $jrow['jid'] . '&pid='.$jrow['posted'].'" class="text-dark">'.$jrow['jname'].'</a></h5>
                                                                    <p class="text-muted mb-0">'.$jrow['jcomname'].'</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div>
                                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary me-2"></i>'.$jrow['jadd'].'</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div>
                                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">RM</span>'.$jrow['jminsalary'].'-'.$jrow['jmaxsalary'].' / month</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div>
                                                                    <p class="text-muted mb-0">Requirement: '.$jrow['jlevel'].'</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 bg-light">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div>
                                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> '.$jrow['jexp'].'</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div>
                                                                    <a href="job-details.php?jid=' . $jrow['jid'] . '&pid='.$jrow['posted'].'" class="text-primary">View More <i class="mdi mdi-chevron-double-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                ';
                                            }
                                        }
                                    
                                    ?>

                                    
                                </div>
                            </div>
                        </div>

                     
            <!-- end row -->

            <!-- end row -->
            <!--<div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination mb-0 justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="mdi mdi-chevron-double-start f-15"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="mdi mdi-chevron-double-right f-15"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>-->
        </div>
        <!-- end containar -->
    </section>
    <!-- all jobs end -->

    <!-- How it Work start 
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">How It Work</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-1.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Register an account</h5>
                            <p class="text-muted">Donec pede justo fringilla vel aliquet nec vulputate eget arcu. In enim justo rhoncus ut a, justo.</p>
                            <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-2.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Search your job</h5>
                            <p class="text-muted">Aliquam lorem ante dapibus in, viverra feugiatquis a tellus. Phasellus viverra nulla ut Quisque rutrum.</p>
                            <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-3.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Apply for job</h5>
                            <p class="text-muted">Nullam dictum felis eu pede mollis pretiumetus Integer tincidunt. Cras dapibus. semper nisi.</p>
                            <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    How it Work end -->

    <!-- counter start 
    <section class="section bg-counter position-relative" style="background: url('images/bg-counters.jpg') center center;">
        <div class="bg-overlay bg-overlay-gradient"></div>
        <div class="container">
            <div class="row" id="counter">
                <div class="col-md-3 col-6">
                    <div class="home-counter pt-4 pb-4">
                        <div class="float-start counter-icon me-3">
                            <i class="mdi mdi-bank h1 text-white"></i>
                        </div>
                        <div class="counter-content overflow-hidden">
                            <h1 class="counter-value text-white mb-1" data-count="120">10</h1>
                            <p class="counter-name text-white text-uppercase mb-0">Companies</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="home-counter pt-4 pb-4">
                        <div class="float-start counter-icon me-3">
                            <i class="mdi mdi-file-document-box h1 text-white"></i>
                        </div>
                        <div class="counter-content overflow-hidden">
                            <h1 class="counter-value text-white mb-1" data-count="480">80</h1>
                            <p class="counter-name text-white text-uppercase mb-0">Applications</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="home-counter pt-4 pb-4">
                        <div class="float-start counter-icon me-3">
                            <i class="mdi mdi-calendar-multiple-check h1 text-white"></i>
                        </div>
                        <div class="counter-content overflow-hidden">
                            <h1 class="counter-value text-white mb-1" data-count="120">10</h1>
                            <p class="counter-name text-white text-uppercase mb-0">Job Posted</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="home-counter pt-4 pb-4">
                        <div class="float-start counter-icon me-3">
                            <i class="mdi mdi-account-multiple-plus h1 text-white"></i>
                        </div>
                        <div class="counter-content overflow-hidden">
                            <h1 class="counter-value text-white mb-1" data-count="200">10</h1>
                            <p class="counter-name text-white text-uppercase mb-0">Member</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
     counter end -->

    <!-- testimonial start 
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Our Success Stories</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-12">
                    <div id="owl-testi" class="owl-carousel owl-theme">
                        <div class="item testi-box rounded p-4 me-3 ms-2 mb-4 bg-light position-relative">
                            <p class="text-muted mb-5">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consecteturqui adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
                            <div class="clearfix">
                                <div class="testi-img float-start me-3">
                                    <img src="images/testi/img-1.png" height="64" alt="" class="rounded-circle shadow">
                                </div>
                                <h5 class="f-18 pt-1">Kevin Stewart</h5>
                                <p class="text-muted mb-0">Web Designer at xyz Company</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="item testi-box rounded p-4 me-3 ms-2 bg-light position-relative">
                            <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                            <div class="clearfix">
                                <div class="testi-img float-start me-3">
                                    <img src="images/testi/img-2.png" height="64" alt="" class="rounded-circle shadow">
                                </div>
                                <h5 class="f-18 pt-1">Charles Garrett</h5>
                                <p class="text-muted mb-0">Marketing manager at abc Company</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="item testi-box rounded p-4 me-3 ms-2 bg-light position-relative">
                            <p class="text-muted mb-5">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consecteturqui adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
                            <div class="clearfix">
                                <div class="testi-img float-start me-3">
                                    <img src="images/testi/img-3.png" height="64" alt="" class="rounded-circle shadow">
                                </div>
                                <h5 class="f-18 pt-1">Perry Martinez</h5>
                                <p class="text-muted mb-0">Marketing manager at abc Company</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Our Client's</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="images/clients/1.png" height="50" alt="">
                </div>end col
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="images/clients/2.png" height="50" alt="">
                </div><end col
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="images/clients/3.png" height="50" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="images/clients/4.png" height="50" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="images/clients/1.png" height="50" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="images/clients/2.png" height="50" alt="">
                </div>>
            </div>
        </div>
    </section>
    testimonial end -->

    <!-- blog start 
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Career advice</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="blog position-relative overflow-hidden shadow rounded">
                        <div class="position-relative overflow-hidden">
                            <img src="images/blog/img-1.jpg" class="img-fluid rounded-top" alt="">
                            <div class="overlay rounded-top bg-dark"></div>
                            <div class="likes">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content p-4">
                            <h4><a href="javascript:void(0)" class="title text-dark">How apps is the IT world</a></h4>
                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                            <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                        <div class="author">
                            <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                            <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="blog position-relative overflow-hidden shadow rounded">
                        <div class="position-relative overflow-hidden">
                            <img src="images/blog/img-2.jpg" class="img-fluid rounded-top" alt="">
                            <div class="overlay rounded-top bg-dark"></div>
                            <div class="likes">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content p-4">
                            <h4><a href="javascript:void(0)" class="title text-dark">Vestibulum ante ipsum primis</a></h4>
                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                            <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                        <div class="author">
                            <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                            <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="blog position-relative overflow-hidden shadow rounded">
                        <div class="position-relative overflow-hidden">
                            <img src="images/blog/img-3.jpg" class="img-fluid rounded-top" alt="">
                            <div class="overlay rounded-top bg-dark"></div>
                            <div class="likes">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content p-4">
                            <h4><a href="javascript:void(0)" class="title text-dark">Maecenas tempus tellus eget</a></h4>
                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                            <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                        <div class="author">
                            <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                            <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    blog end -->

    <!-- subscribe start 
    <section class="section">
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

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/counter.int.js"></script>

    <script src="js/app.js"></script>
    <script src="js/home.js"></script>

</body>
</html>