<?php
	$dbhandle=mysql_connect("localhost","root",'')
	or die("Unable to connect to MySQL");
	$selected=mysql_select_db("dasa", $dbhandle)
	 or die("Could not select examples");
	$title=$_POST['title'];
	$textarea=$_POST['textarea'];
	$query="insert into userblog(blogtitle,text) values('$title','$textarea'); ";
	mysql_query($query);
	header("location:userhomepage.php");
?>

