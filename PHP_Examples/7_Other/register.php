<?php
session_start();
//create a variable called $pagename which contains the actual name of the page
$pagename="Customer Registration";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo "Register and create worked up account<br>";

echo "<form action=getRegister.php   method='post'>
    <table>
        <tr><td>First Name </td> <td> <input type='text' name='firstName'></td></tr>
        <tr><td>Last Name </td> <td> <input type='text' name='lastName'></td></tr>
        <tr><td>Address </td> <td> <input type='text' name='u_address'></td></tr>
        <tr><td>Postcode </td> <td> <input type='text' name='u_postcode'></td></tr>
        <tr><td>Tel No </td> <td> <input type='text' name='u_tel'></td></tr>
        <tr><td>E-mail Address Name </td> <td> <input type='text' name='u_e_mail'></td></tr>
        <tr><td>Password </td> <td> <input type='text' name='u_password'></td></tr>
        <tr><td>Confirm password </td> <td> <input type='text' name='u_cpassword'></td></tr>
        <tr><td><button  name='register' type='submit'> Register </button> </td> <td> <button name='clear'> Clear form </button> </td></tr>
    </table>
    </form>";


//include head layout
include("footfile.html");
?>
