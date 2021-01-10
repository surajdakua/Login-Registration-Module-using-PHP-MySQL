<?php
    #Step1 require MySQL database connection.
    require_once("sqlConnection.php");

    #Step2 regex for validation
    $regexMobile = "/^([+91])?[6-9][0-9]{9}$/";
    $regexZipcode = "/^[4][0-9]{5,}$/";
    $regexEmail = "/^([a-zA-Z0-9]([a-zA-Z0-9_\.]+)?[a-zA-z0-9])@([a-zA-Z0-9]([a-zA-Z0-9\-]+)?[a-zA-z0-9])\.([a-zA-Z]{2,})([a-zA-Z]{2,})?$/";
    $regexPassword = "/^[a-zA-Z0-9]{8,}$/";

    #Step3 capture values in variables using POST
    $retailerPassword = $_POST['password'];
    $encryptedPassword = sha1($_POST['password']);
    $retailerConfirmPassword = $_POST['cpassword'];
    $retailerFirstName = $_POST['firstname'];
    $retailerLastName = $_POST['lastname'];
    $retailerCompanyName = $_POST['companyName'];
    $retailerEmail = $_POST['email'];
    $retailerMobile = $_POST['mobile'];
    $retailerAddress = $_POST['address']." ".$_POST['address2'];
    $retailerLocation = $_POST['location'];
    $retailerCity = $_POST['city'];
    $retailerZipcode = $_POST['zipcode'];

    #Step4 compare values with regex if they are valid.
    if(empty($retailerFirstName))
        echo json_encode(array("firstname"=>"Please enter first name"));
    else if(empty($retailerLastName))
        echo json_encode(array("lastname"=>"Please enter last name"));
    else if(empty($retailerCompanyName))
        echo json_encode(array("company"=>"Please enter company name"));
    else if(empty($retailerPassword))
        echo json_encode(array("password"=>"Please enter password"));
    else if(!preg_match($regexPassword,$retailerPassword))
        echo json_encode(array("password"=>"Invalid Password"));
    else if($retailerPassword != $retailerConfirmPassword)
        echo json_encode(array("confirmpassword"=>"Password mismatch"));
    else if(empty($_POST['address'] && $_POST['address2']))
        echo json_encode(array("address"=>"Please enter address"));
    else if(!preg_match($regexEmail,$retailerEmail))
        echo json_encode(array("email"=>"Invalid Email"));
    else if(!preg_match($regexMobile,$retailerMobile))
        echo json_encode(array("mobile"=>"Enter proper phone number"));
    else if(!preg_match($regexZipcode,$retailerZipcode))
        echo json_encode(array("zip"=>"Invalid zip code"));
        
    #Step5 if everything works fine then insert values to database bookskart
    else
    {
        #prepare query.
        $queryDB = "select count(*) as cnt from retailers where email = '$retailerEmail'";

        #execute query.
        $executeQuery = $dbConnect->query($queryDB) or die($dbConnect->error);

        #capture result into a variable.
        $result = $executeQuery->fetch_array(MYSQLI_ASSOC);

        #check if record already exist in DB.
        if($result['cnt'] > 0){
            echo json_encode(array("errormsg"=>"Sorry you've already registered."));
        }
            
        else
        {
            #prepare insertion query.
            $insertQuery =  "insert into retailers (firstname,lastname,companyname,email,mobile,address,location,city,zipcode,pass) values ('$retailerFirstName','$retailerLastName','$retailerCompanyName','$retailerEmail','$retailerMobile','$retailerAddress','$retailerLocation','$retailerCity','$retailerZipcode','$encryptedPassword')";

            $insertCompanyRecord = "insert INTO companydata (companyname, zipcode, mobile, location) values ('$retailerCompanyName','$retailerZipcode','$retailerMobile','$retailerLocation')";

            #execute insertion query.
            $executeInsertionQuery = $dbConnect->query($insertQuery) or die($dbConnect->error);
            $executeCompanyQuery = $dbConnect->query($insertCompanyRecord) or die($dbConnect->error);

            #if succesful then show success message and redirect to login page.
            if($executeInsertionQuery == true && $executeCompanyQuery == true){
                echo json_encode(array("successmsg"=>"Registration Successful"));
                // header("location:login.php");
            }
                
        }
    }
?>