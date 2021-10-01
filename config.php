<?php
	error_reporting(0);
	$servername = "localhost"; // 0.0.0.0:3306
	$username = "root";
	$password = ""; //blank/null/empty
	#$password = "root"; //For mobile users
	// Create connection
	$con = mysqli_connect($servername, $username, $password);
	mysqli_select_db($con, "stud_info");
	// Check connection
	if (!$con) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully<br>";

  // data fatching
  $first_name = $_REQUEST['firstName'];
  $last_name = $_REQUEST['lastName'];
  $email = $_REQUEST['emailId'];
  $mobile_no = $_REQUEST['mobileNumber'];
  $gender = $_REQUEST['Gender'];
  $date_of_birth = $_REQUEST['DOB'];
  $address = $_REQUEST['Address'];
  $city = $_REQUEST['City'];
  $pincode = $_REQUEST['pinCode'];
  $state = $_REQUEST['State'];
  $country = $_REQUEST['Country'];
  $hobby = $_REQUEST['Hobby'];
  $qualification = $_REQUEST['Qualification'];
  $course = $_REQUEST['Course'];

  $sql = "INSERT INTO students VALUES(NULL,'$first_name','$last_name','$email','$mobile_no','$gender','$date_of_birth','$address','$city','$pincode','$state','$country','$hobby','$qualification','$course')";

  	if(mysqli_query($con, $sql))
 	{
            echo "Your Data Inserted Successfully :)<br>"; 
	} 
	else
	{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($con)."<br>";
    }
          
        // Close connection
        mysqli_close($con);

	echo "<h3><a href='index.html' style='text-decoration:none;'>Back To Home</a></h3>"

?>
