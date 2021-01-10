<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
        <title>Bookskart Login Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Bootstrap CSS -->

        <!-- Material-Design CDN -->
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
        <!-- Material-Design CDN -->

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

        <!-- Custom CSS -->
        <style>
            /* Login CSS */
            .loginbody{
                overflow-x: hidden;
                background-image: url("img/login.png");
                background-size: cover 300px 300px;
                background-repeat: no-repeat;
                background-position: right top;    
            }
            #signin{
                padding-left: 120px;
            }
            #loginrow{
                height: auto;
            }
            #signin:after{
                background-color: #ff3368;
                display: block;
                height: 3px;
                width: 50px;
                margin: 0 auto;
                content: " ";
                margin-top: 20px; 
            }
            #labeltxt{
                display: block;
                margin-top: 10px;
                padding: 5px 10px;
                font-size: 15px;
                font-weight: 600;
            }
            input{
                display: block;
                width: 350px;

                margin: auto;
                padding: 15px;
                border:1px;
                border-radius: 25px;
                color:black;
            }

            .btn1{
                width: 435px;
            }

            .box{
                box-shadow: 5px 10px 18px #888888;
                border: 0px solid;
                border-radius: 10px;
            }

            .inputwithicon{
                position: relative;
            }

            .inputwithicon img{
                position:absolute;
                left:400px;
                bottom:5px;
            }
            /* Login CSS */

            /* Mobile Device */
            @media screen and (max-width: 575px){
                .loginbody{
                    overflow-y: scroll !important;
                }
                .navitem{
                    padding: 0px !important;
                    margin: 0px;

                }
                #logo{
                    font-size: larger !important;
                    margin-right: 40% !important;
                    padding-left: 20px !important;
                }
                #signin{
                    margin: 5% !important;
                    font-size: x-large !important;
                    padding-left: 0px !important;
                }
                .card{
                    width: auto !important;
                    height: auto !important;
                    margin-top: 0% !important;
                    margin-bottom: 10% !important;
                }
                #password{
                    width: 100% !important;
                }
                #exampleInput{
                    width: 100% !important;
                }
                .btn{
                    width: auto !important;
                }
                .hotspot{
                    font-size: smaller !important;
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
                #brandlogo{
                    padding-left: 40px !important;
                    display: none !important;
                }
                
                .navbar-brand{
                    margin-right: 0px !important;
                }
            }
            /* Mobile Device */
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
        </style>
        <!-- Custom CSS -->
    </head>
    <body class="loginbody">
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
       
        <!-- Login Div -->
        <div class="row mb-5 pb-5" id="loginrow">
            <div class="container">
                <div class="col-xl-4 col-12">
                    <h1 class="text-center mt-3" style="font-family: 'Ubuntu', sans-serif;" id="signin"><b>SIGN IN</b></h1>
                    <div class="card  justify-content-center" style="width: 30rem; height: 25rem; margin: auto; margin-top: 50px;">
                        <div class="card-body box">
                            <form id="Form_Data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" id="labeltxt" style="font-family: 'Ubuntu', sans-serif;">Email address</label>
                                    <input onfocus="this.value=''" type="email" class="form-control" id="email" placeholder="Enter email address" name="useremail" aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="form-group inputwithicon">
                                    <label for="exampleInputPassword1"  id="labeltxt" style="font-family: 'Ubuntu', sans-serif;">Password</label>
                                    <input type="password" class="form-control" id="password" name="userpass" placeholder="Enter password" onfocus="this.value=''">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/visible.png" onclick="myFunction();" id="eye"/>
                                </div>
                                <div>
                                    <p style="color:red;" id="para"></p>
                                </div>
                                <button type="button" class="btn btn-danger btn1" id="login_btn"  style="font-family: 'Ubuntu', sans-serif;">Submit</button>
                         </form> 
                    <div style="margin-top: 20px;" class="hotspot">
                        <a href="registrationPage.php" style="font-family: 'Ubuntu', sans-serif;">Create One?</a>
                        <a href="ForgetPassword.html" style="display: inline; float:right" style="font-family: 'Ubuntu', sans-serif;">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Div -->

        <!-- Spinners -->
        <div class="container mb-3">
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

        <!-- Custom Js -->
        <script>
            // Function to hide/show password
            function myFunction() {
                var showPass = document.getElementById("password");
                if (showPass.type === "password")
                {
                    showPass.type = "text";
                }
                else
                {
                    showPass.type = "password";
                }
            }
            // Function to hide/show password

            // Ajax for validation of Login credentials
            $(document).ready(function () {
                $("#login_btn").click(function () {
                    str = $("#Form_Data").serialize();
                    // console.log(str);
                    $.ajax({
                         type:"POST",
                         data: str,
                         url:"loginValidationAPI.php",
                         success:function (res) {
                            $('#para').empty();
                            $('#para').html(res);
                            // console.log(res);
                           },
                         error:function (err) {
                             console.log(err);
                         }
                     });
                })
            })
            // Ajax for validation of Login credentials
        </script>
        <!-- Custom Js -->
        
        <!-- Bootstrap Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Bootstrap Javascript -->
    </body>
</html>