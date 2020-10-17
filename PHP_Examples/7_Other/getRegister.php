 <?php
 session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

//Capture the details entered in the all the fields of the form using the $_POST superglobal variable
//Store these details into a set of new variables
if(isset($_POST['register'])){
	$first_Name = $_POST['firstName'];
	$last_Name  = $_POST['lastName'];
	$address  = $_POST['u_address'];
	$post_Code  = $_POST['u_postcode'];
	$tel_No  = $_POST['u_tel'];
	$e_mail  = $_POST['u_e_mail'];
	$password  = $_POST['u_password'];
	$cPassword  = $_POST['u_cpassword'];



	//if the 2 entered passwords do not match
	if($password != $cPassword)
	{
		//Display error passwords not matching message
		echo "Passwords do not match";
		//Display a link back to register page
		echo "<a href=register.php> Back </a>";
	}
	 

	//Retrieve the error number using mysql_errno. If the error detector returns the number 0, everything is fine
 	else if( mysqli_errno($conn) == 0){
		//Write SQL query to insert a new user into users table and execute SQL query
		$SQL = "INSERT INTO users(firstName, lastName, address, postCode) VALUES('$first_Name', '$last_Name', '$address', '$post_Code')";
		$query = mysqli_query($conn, $SQL);

		if(!$query)
			die("Query failed" . mysqli_error($conn));
	
	
		//Display registration confirmation message
		echo "Your registration has been confirmed";
		//Display a link to login page
		echo "<a href=login.php> Login </a> ";
	}
	
	//if the error detector does not return the number 0, there is a problem
	else if( mysqli_errno($conn) != 0){
		//Display generic error message
		//if the error detector returned the number 1062 i.e. unique constraint on the email is breached
		if(mysqli_errno($conn) == 1062){

			//(meaning that the user entered an email which already existed)
			//Display email already taken error message
			echo "E-mail already taken";
			//Display a link back to register page
			echo "<a href=register.php> Go back </a>";
		}

	}
 
}

echo "<p> </p>";

//include head layout
include("footfile.html");
?>
