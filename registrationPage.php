<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
        <title>Bookskart Registration page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Bootstrap CSS -->

        <!-- Material-Design CDN -->
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
        <!-- Material-Design CDN -->
        
        <!-- Custom CSS -->
        <style>
            .registrationBody{
                    background-color: #e8e8ee;
                }
            #registrationHeader::after{
                background-color: #ff3368;
                display: block;
                height: 3px;
                width: 150px;
                margin: 0 auto;
                content: " ";
                margin-top: 10px;
            }

            label{
                font-family: 'Ubuntu', sans-serif;
            }

            /* For mobile device */
            @media screen and (max-width: 575px)
            {
                .registrationBody{
                    background-color: #e8e8ee !important;
                }
                #registrationHeader{
                    font-size: large !important;
                }
                #registrationHeader::after{
                    background-color: #ff3368;
                    display: block;
                    height: 3px;
                    width: 100px;
                    margin: 0 auto;
                    content: " ";
                    margin-top: 10px;
                }
                #logo{
                    font-size: larger !important;
                    margin-right: 40% !important;
                }
                .firstname{
                    display:block !important;
                    font-size: larger !important;
                }
                .lastname{
                    display:block !important;
                    font-size: larger !important;
                }
                .companyname{
                    display:block !important;
                    font-size: larger !important;
                }
                #firstlastcompanyName{
                    display:none !important;
                }
                #passwordEnter{
                    display:none !important;
                }
                .passwordMobile{
                    display:block !important;
                    font-size: larger !important;
                }
                .confirmpassword{
                    display:block !important;
                    font-size: larger !important;
                }
                #address{
                    display:none !important;
                }
                .addressMobile{
                    display: block !important;
                    font-size: larger !important;
                }
                #emailmobile{
                    display: none !important;
                }
                .emailMobile{
                    display: block !important;
                    font-size: larger !important;
                }
                .phoneMobile{
                    display: block !important;
                    font-size: larger !important;
                }
                #zipEnter{
                    display: none !important;
                }
                .zipMobile{
                    display: block !important;
                    font-size: larger !important;
                }
                /* Footer section */
                footer{
                    background-color: #161414;
                    padding: 10px !important;
                    color: whitesmoke;
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    color: white;
                    text-align: center;
                    font-size: 10px !important;
                }
                /* Footer section */
                .btn{
                    margin-bottom: 30px !important;
                }
                #brandlogo{
                    display: none !important;
                }
                #logo{
                    padding-right: 0px !important;
                    padding-left: 10px !important;
                }
            }
            /* For mobile device */

            /* Footer section */
            footer{
                background-color: #161414;
                padding: 20px;
                color: whitesmoke;
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                color: white;
                text-align: center;
            }
            /* Footer section */
            /* spinner */
            #cover-spin{
                display:none;
                width:100%;
                z-index:9999;
                left:0;right:0;top:0;bottom:0;
                background-color: rgba(255,255,255,0.7);
                position:absolute;
            }
            /* spinner */
        </style>
        <!-- Custom CSS -->

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;700&display=swap" rel="stylesheet"> 
        <!-- Google Font -->
        
        <!-- Icon Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Icon Font Awesome -->

        <!-- Bootstrap Popper/jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!-- Bootstrap Popper/jQuery -->
        
    </head>
    <body class="registrationBody">
    <div id="cover-spin"></div>
        <!-- Nav-Bar -->
        <nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#LoginSupportedContent" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <img src="img/logo.png" width="35px" height="35px" style="border-radius: 5px; margin-right: 5px" id="brandlogo"/>
            <a class="navbar-brand mr-5 justify-content-center" href="#" style="font-family: 'Ubuntu', sans-serif; font-size: xx-large;" id="logo"><strong>Bookskart.</strong></a>      
            <div class="collapse navbar-collapse main-menu-item " id="LoginSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><strong>Login</strong> </a>
                    </li>
                </ul>
              
            </div>
            
        </nav>
        <!-- Nav-Bar -->

        <!-- Registration Form -->
        <div class="container mb-5">
            <div class="row">
                <!-- Registration form header -->
                <div class="col-xl-12 col-12 mt-3">
                    <h2 class="text-center" style="font-family: 'Ubuntu', sans-serif;" id="registrationHeader">Retailer Registration Form</h2>
                </div>
                <!-- Registration form header -->

                <!-- Registration Form Elements -->
                <div class="col-xl-12 mt-2">
                    <form class="needs-validation" novalidate id="reg-form">
                        <!-- First/Last/Company name -->
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="firstname" placeholder="First name" required>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 firstname" style="display:none;">
                                <p id="firstName" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" name="lastname" placeholder="Last name" required>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 lastname" style="display:none">
                                <p id="lastName" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Company name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustomUsername" name="companyName" placeholder="Company name" aria-describedby="inputGroupPrepend" required>
                                </div>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 companyname" style="display:none">
                                <p id="companyName" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->

                            <!-- Response Message -->
                            <div>
                                <p id="firstlastcompanyName" style="color:red;"></p>
                            </div>
                            <!-- Response Message -->
                        </div>
                        <!-- First/Last/Company name -->

                        <!-- Password/Confirm Password -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Password</label>
                                <input type="password" onfocus="this.value=''" class="form-control" id="validationCustom04" placeholder="Password should have atleast 8 characters" name="password" required>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 passwordMobile" style="display:none;">
                                <p id="passwordMob" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Confirm password</label>
                                <input type="password" class="form-control" id="validationCustom05" name="cpassword" placeholder="Re-enter passsword" required>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 confirmpassword" style="display:none;">
                                <p id="confirmpasswordMob" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->
                            <!-- Response Message -->
                            <div>
                                <p id="passwordEnter" style="color:red;"></p>
                            </div>
                            <!-- Response Message -->
                        </div>
                        <!-- Password/Confirm Password -->

                        <!-- Address Div -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Address</label>
                                <input type="text" class="form-control" id="validationCustom06" name="address" placeholder="Flat 123 Building Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Address 2</label>
                                <input type="text" class="form-control" id="validationCustom07" name="address2" placeholder="Street name Landmark" required>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 addressMobile" style="display:none;">
                                <p id="addressMob" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->
                            <!-- Response Message -->
                            <div>
                                <p id="address" style="color:red;"></p>
                            </div>
                            <!-- Response Message -->
                        </div>
                        <!-- Address Div -->

                        <!-- Email/Telephone -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Email-Id</label>
                                <input type="text" class="form-control" id="validationCustom08" name="email" placeholder="We'll never share your email with anyone else." required>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 emailMobile" style="display:none;">
                                <p id="emailMob" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Mobile/Telephone</label>
                                <input type="text" class="form-control" id="validationCustom09" name="mobile" placeholder="Enter mobile number" required>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 phoneMobile" style="display:none;">
                                <p id="phoneMob" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->
                            <!-- Response Message -->
                            <div>
                                <p id="emailmobile" style="color:red;"></p>
                            </div>
                            <!-- Response Message -->
                        </div>
                        <!-- Email/Telephone -->

                        <!-- City/State/Zip -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Location</label>
                                <select class="form-control" id="validationCustom03" name="location" required>
                                    <option value="Colaba">Colaba</option>
                                    <option value="Lower Parel">Lower Parel</option>
                                    <option value="Blue">Elphinstone Road</option>
                                    <option value="Elphinstone Road">Mumbai Central</option>
                                    <option value="Grant Road">Grant Road</option>
                                    <option value="Grant Road">Charni Road</option>
                                    <option value="Currey Road">Currey Road</option>
                                    <option value="Andheri">Andheri</option>
                                    <option value="Bandra">Bandra</option>
                                    <option value="Khar">Khar</option>
                                    <option value="Red">Marines</option>
                                    <option value="Ghatkopar">Ghatkopar</option>
                                    <option value="Versova">Versova</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">City</label>
                                <input type="text" class="form-control" id="validationCustom04" name="city" value="Mumbai" required readonly="true">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control" id="validationCustom10" name="zipcode" placeholder="Zip" required>
                            </div>
                            <!-- Mobile Response Message -->
                            <div class="col-12 zipMobile" style="display:none;">
                                <p id="zipMob" style="color:red;"></p>
                            </div>
                            <!-- Mobile Response Message -->

                            <!-- Response Message -->
                            <div>
                                <p id="zipEnter" style="color:red;"></p>
                            </div>
                            <!-- Response Message -->
                        </div>
                        <!-- City/State/Zip -->

                        <!-- Terms/Conditions Div -->
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <p style="margin-left: 10px; padding-top:2px">By clicking Sign Up you agree to our <a href="termsOfService.html" target="_blank">Terms of Service</a> and that you've read <a href="privacyPolicy.html" target="_blank">Privacy Policy</a></p>
                            </div>
                        </div>
                        <!-- Terms/Conditions Div -->

                        <!-- Response Message -->
                        <div>
                            <p class="reg-msg" style="color:red;"></p>
                        </div>
                        <!-- Response Message -->
                        <button class="btn btn-danger reg-btn" type="button">Sign Up</button>
                    </form>
                </div>
                <!-- Registration Form Elements -->
            </div>
        </div>
        <!-- Registration Form -->

        <!-- Spinners -->
        <div class="container mb-3" style="z-index:9999; position:relative ">
            <div class="row">
                <div class="col-xl-12">
                <div class="spinner-border text-danger spin" style="width: 7rem; height: 7rem;position: fixed; top: 50%;left: 50%;display:none;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                </div>
            </div>
        </div>
        <!-- Spinners -->

         <!-- Footer Section -->
         <section class="footer sticky-bottom">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 copy">
                            <p class=" text-center" style="font-size: larger;color: #ffffff;">Copyright &copy; by BooksKart All rights reserved </p>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
        <!-- Footer Section -->

        <!-- Javascript Validation -->
        <script>
            /* Ajax Code */
            $(document).ready(function(){
                $('.reg-btn').click(function(){
                    //preapre query string using serialize function.
                    result = $('#reg-form').serialize();
                    //use  ajax function
                    $.ajax({
                        type:"POST",
                        data:result,
                        url:"registrationValidationAPI.php",
                        success:function(res){
                            console.log(res);
                            var respData = JSON.parse(res);
                            /* First Name */
                            if(respData.firstname)
                                $('#firstlastcompanyName').html(respData.firstname);
                                $('#firstName').html(respData.firstname);
                            $('#validationCustom02').click(function(){
                                let value = $("#validationCustom01").val();
                                if(value.length > 2)
                                    $('#firstlastcompanyName').html(respData.firstname).hide();
                                    $('#firstName').html(respData.firstname).hide();
                            });
                            /* First Name */
                        
                            /* Last Name */
                            if(respData.lastname){  
                                $('#firstlastcompanyName').html(respData.lastname).show();
                                $('#lastName').html(respData.lastname);
                                $('#validationCustom02').click(function(){
                                    $('#firstlastcompanyName').html(respData.lastname).show();
                                });
                            }
                            $('#validationCustomUsername').click(function(){
                                let value = $("#validationCustom02").val();
                                if(value.length > 4)
                                    $('#firstlastcompanyName').html(respData.firstname).hide();
                                    $('#lastName').html(respData.lastname).hide();
                            });
                            /* Last Name */

                            /* Company Name */
                            if(respData.company){
                                $('#firstlastcompanyName').html(respData.company).show();
                                $('#companyName').html(respData.company);
                                $('#validationCustomUsername').click(function(){
                                    $('#firstlastcompanyName').show();
                                });
                            }
                            $('#validationCustom04').click(function(){
                                let value = $("#validationCustomUsername").val();
                                if(value.length > 1)
                                    $('#firstlastcompanyName').html(respData.firstname).hide();
                                    $('#companyName').html(respData.company).hide();
                            });
                            /* Company Name */

                            /* Password Box */
                            if(respData.password){
                                $('#passwordEnter').html(respData.password).show();
                                $('#passwordMob').html(respData.password);
                            }
                            $('#validationCustom05').click(function(){
                                let value = $("#validationCustom04").val();
                                if(value.length > 8)
                                    $('#passwordEnter').html(respData.password).hide();
                                    $('#passwordMob').html(respData.password).hide();
                            });
                            /* Password Box */

                            /* Confirm Password Box */
                            if(respData.confirmpassword){
                                $('#passwordEnter').html(respData.confirmpassword).show();
                                $('#confirmpasswordMob').html(respData.confirmpassword);
                                $('#validationCustom05').click(function(){
                                    $('#passwordEnter').show();
                                });
                            }
                            $('#validationCustom06').click(function(){
                                let value = $("#validationCustom05").val();
                                if(value.length > 8)
                                    $('#passwordEnter').html(respData.password).hide();
                                    $('#confirmpasswordMob').html(respData.confirmpassword).hide();
                            });
                            /* Confirm Password Box */

                            /* Address Box */
                            if(respData.address){
                                $('#address').html(respData.address).show();
                                $('#addressMob').html(respData.address);
                            }
                            $('#validationCustom07').click(function(){
                                let value = $("#validationCustom06").val();
                                if(value.length > 1)
                                    $('#address').html(respData.password).hide();
                                    $('#addressMob').html(respData.address).hide();
                            });
                            /* Address Box */

                            /* Address Box 2 */
                            if(respData.address){
                                $('#address').html(respData.address).show();
                                $('#addressMob').html(respData.address);
                                $('#validationCustom07').click(function(){
                                    $('#address').show();
                                });
                            }
                            $('#validationCustom08').click(function(){
                                let value = $("#validationCustom07").val();
                                if(value.length > 1)
                                    $('#address').html(respData.address).hide();
                                    $('#addressMob').html(respData.address).hide();
                            });
                            /* Address Box 2 */

                            /* Email Box */
                            if(respData.email){
                                $('#emailmobile').html(respData.email).show();
                                $('#emailMob').html(respData.email);
                            }
                            $('#validationCustom09').click(function(){
                                let value = $("#validationCustom08").val();
                                if(value.length > 5)
                                    $('#emailmobile').html(respData.email).hide();
                                    $('#emailMob').html(respData.email).hide();
                            });
                            /* Email Box */

                            /* Mobile Box */
                            if(respData.mobile){
                                $('#emailmobile').html(respData.mobile).show();
                                $('#phoneMob').html(respData.mobile);
                                $('#validationCustom09').click(function(){
                                    $('#emailmobile').show();
                                });
                            }
                            $('#validationCustom10').click(function(){
                                let value = $("#validationCustom09").val();
                                if(value.length >= 10)
                                    $('#emailmobile').html(respData.mobile).hide();
                                    $('#phoneMob').html(respData.mobile).hide();
                            });
                            /* Mobile Box */

                            /* Zip Box */
                            if(respData.zip){
                                $('#zipEnter').html(respData.mobile).show();
                                $('#zipMob').html(respData.zip).show();
                            }
                            $('.reg-btn').click(function(){
                                $('#zipEnter').html(respData.mobile).hide();
                                $('#zipMob').html(respData.zip).hide();
                            });
                            /* Zip Box */                         

                            /* If all fields are correct after 2s delay redirect to login page. */
                            if(respData.successmsg){
                                $('.reg-msg').html(respData.successmsg);
                                // $('#reg-msg').hide();
                                $('#cover-spin').show();
                                $(".spin").show();
                                setTimeout(function(){
                                    window.location.href = "login.php";
                                }, 5000);
                                
                            }
                            $('.reg-msg').html(respData.errormsg);
                            /* If all fields are correct after 2s delay redirect to login page. */
                        },
                        error:function(err){
                            console.log(err);   
                        }
                    });
                })
            });
            /* Ajax Code */
        </script>
        <!-- Javascript Validation -->
        
         <!-- Bootstrap Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Bootstrap Javascript -->
    </body>
</html>