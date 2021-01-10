<?php
    #Step1 : Require Database connection
    require_once("sqlConnection.php");

    // print_r($_POST);
    #Reg-Ex for Login Page
    $regexEmail = "/^([a-zA-Z0-9]([a-zA-Z0-9_\.]+)?[a-zA-Z0-9])@([a-zA-Z0-9]([a-zA-Z0-9\-]+)?[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/";
    $regexPassword = "/^[a-zA-Z]{8,}$/";
    $retailerEmail = $_POST['useremail'];
    $retailerPassword = $_POST['userpass'];
    $encryptedPassword = sha1($_POST['userpass']);

    #Step2 Check if fields are empty.
    if(empty($_POST['useremail']) && !empty($_POST['userpass']))
        echo "Please enter email";
    elseif(empty($_POST['userpass']) && !empty($_POST['useremail']))
        echo "Please enter password";
    elseif(empty($_POST['userpass']) && empty($_POST['useremail']))
        echo "All fields are required";     
	else if(!preg_match($regexEmail, $retailerEmail))
		echo "Please enter valid email";
	else if(!preg_match($regexPassword, $retailerPassword))
		echo "Password should contain atleast 8 characters.";

    #Step3 If valid search retailer data in table retailers
    else
    {
        #Prepare query to insert into DB.
        $queryDB = "select * from retailers where email='$retailerEmail'";

        #execute query
        $execQuery =  $dbConnect->query($queryDB) or die($dbConnect->error);

        #if rows greater than zero then redirect to retailer dashboard.
        if($execQuery->num_rows > 0)
        {
            $result = $execQuery->fetch_array(MYSQLI_ASSOC);
            if($result['pass'] <> $encryptedPassword){
                echo "Incorrect password";
            }
            else
                echo "Login Successful";
        }
        else
            echo "Sorry no user found";
    }
?>