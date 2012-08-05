<?php 

$dbhandle=mysql_connect("localhost","root",'')
or die("Unable to connect to MySQL");

$selected=mysql_select_db("dasa", $dbhandle)
 or die("Could not select examples");

$username=$_POST['username'];
$password=$_POST['password'];
$username= stripslashes($username);
$password= stripslashes($password);
$username= mysql_real_escape_string($username);
$password= mysql_real_escape_string($password);

$query="select password from login where username='$username' and password='$password'";
$fetch_result=mysql_query($query);
$count=mysql_num_rows($fetch_result);

if($count==1)
{
	header("location:userhomepage.php");
}
else
{
		header("location:failure_html.php");
}






mysql_close($dbhandle);

?>