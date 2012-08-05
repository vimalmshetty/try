<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<?php
	$dbhandle=mysql_connect("localhost","root",'')
	or die("Unable to connect to MySQL");
	$selected=mysql_select_db("dasa", $dbhandle)
	 or die("Could not select examples");
	// $query="insert into userblog(blogtitle,text) values('$title','$textarea'); ";
    //	mysql_query($query);
?>


<title>UserHome</title>
<link href="default.css" rel="stylesheet" type="text/css" />
<link href="test.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"
src="jquery.min.js">

</script>
</head>
<body>
<div id="header">
	<div id="logo" style="width: 251px; height: 49px">
		<h1 style="width: 180px; height: 48px"><a href="#">ದಾಸ ಸಾಹಿತ್ಯ </a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">home</a></li>
			<li><a href="#">photos</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">links</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<div id="headerbg" style="height:50px;"><p class="text2">&#8220;ದಾಸನ ಮಾಡಿಕೊ ಎನ್ನ ಸ್ವಾಮಿ......	&#8221;</p>
</div>
<!-- start page -->
<div id="page">

	<!-- start content -->
	<div id="content">
		<!-- start latest-post -->
		<div id="latest-post" class="post">
				<div id="navigation1" style="margin:10px; width: 128px;">
				<div class="post" style="height: 238px; width: 134px" >	
				User Profile info
				</div>
				<div class="post">	Something else 
				</div>

				</div>

			<h1 class="title">recent comments of friends </h1>


			<div class="entry">
               <?php
               		$query="SELECT * from userblog order by blogid DESC";
               		$fetch_result=mysql_query($query);
					$count=mysql_num_rows($fetch_result);
					if($count>=1)
					{
						
						while($row = mysql_fetch_array($fetch_result))
						{
							echo "<table><tr><td>".$row['blogtitle']."</td></tr>";
							echo "<tr><td>".$row['text']."</td></tr></table>";
							echo "<br/>";
                            echo "<input type='text' maxlength='100'  style='width:200px; height:20px; border-bottom-style:solid'/>";
		
						}
					}
				?>
				
				
			</div>
		</div>
		<!-- end latest-post -->
		<!-- start recent-posts -->
		<div id="recent-posts">
			<div class="post">
				
				
				<div class="entry">
					<ul><li><a href="newblog.html"> Create a new Blog</a></li>
					<li><a href="userblog.php">List of my blogs</a></li></ul>

				</div>
			</div>
			<div class="post">
				<p> List of friends available in his/her name</p>
			</div>
			<div class="post">
				<p> Recent videos available</p>
				
			</div>
			<div class="post">
				<p> Any other facilities you want to inclucate </p>
				
			</div>

		</div>
		<!-- end recent-posts -->
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end sidebar -->

<!-- end page -->
<div id="footer1">
	<p id="legal">&copy Narahari &nbsp<a href="http://www.facebook.com/sbenkal">Narahari Narayana</a> 
	| <a href="http://www.cssportal.com/">CSS Portal</a></p>
	<p id="links"><a href="#">Privacy</a>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; <a href="#">Terms</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
</div>
</body>
</html>
