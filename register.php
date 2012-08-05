<?php

$dbhandle=mysql_connect("localhost","root",'')
or die("Unable to connect to MySQL");

$selected=mysql_select_db("dasa", $dbhandle)
 or die("Could not select examples");

$myfirstname=$_POST['firstname'];
$mydob=$_POST['dob'];
$myemailid=$_POST['emailid'];
$myphonenumber=$_POST['phonenumber'];
$mypassword=$_POST['password'];
$mylastname=$_POST['lastname'];
$query="select emailid from userdb where emailid='$myemailid'";
$fetch_result=mysql_query($query);
$count=mysql_num_rows($fetch_result);

if($count==1)
{

	echo "User is already registered, please try with different email id";
	header("location:register.html");
}
else 
{
	$query="insert into userdb(firstname,lastname,emailid,dateofbirth,password) values ('$myfirstname','$mylastname','$myemailid','$mydob','$mypassword')";
	$fetch_result=mysql_query($query);
	$query="insert into login(username,password) values ('$myemailid','$mypassword')";
	$fetch_result=mysql_query($query);
	echo "User is registered";
	
	
}
mysql_close($dbhandle);

?>
