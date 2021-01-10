
<?php 
	/* create table retailers(
	     firstname varchar (100),
	     lastname varchar (50),
	     companyname varchar (100),
	     email varchar(20),
	     mobile bigint(11),
	     address1 varchar(100),
	     location varchar(20),
	     city varchar(25),
	     zipcode int(7),
		 pass varchar(100),
		 rid int auto_increment primary key);
	*/
	
	/*	
		create table companydata(
		     companyname varchar(100) ,
		     location varchar(100),
			 zipcode int(7),
			 mobile bigint);
	*/

	#eshtablish connection to database bookskart
	$dbConnect = @new mysqli("localhost","root","","bookskart");
?>
