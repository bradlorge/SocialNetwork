<?php
include 'connect.php';
session_start();?>
<!DOCTYPE html>
<html>
<head>
   <title>Gcd Social Networking</title>
   <link rel="stylesheet" type="text/css" href="style1.css" />
</head>
<body>
<div id="wrapper">
<div id= 'header'>
<a href="profileDisplay.php"><img src="GCD.jpg" alt="GCD" width="100" height="100" img align="left"></a>
<h1><center><u>Gcd Social Networking</u></center></h1>
<div class="floatright"><h3><a href='logout.php'>Logout</a></h3></div>
</div>
<div id='nav'> 
<ul> <center>
<a href='profileDisplay.php' class='active'>Home</a>
<a href='edit.php'>Edit Profile</a>
<a href='myblogs.php'>Blogs</a>
<a href='photos.php'>Photos</a>
<a href='#'>Friends</a>
<a href='search.php'>Search People</a>
<a href='messages.php'>Messages</a>
 </ul> </center>
</div> 
<div id='content'>
<div id='left'>
<br><strong><u>Profile</strong></u></br>
<?php
	$user=$_SESSION['username'];
	$query="SELECT * FROM registration WHERE uname='$user'";
	$result=mysqli_query($connection,$query);
	if($result){
		if(mysqli_num_rows($result)==1){
				while($row = mysqli_fetch_array($result)){
				extract($row);
				echo "<center><u><img src='".$path."'  height='180' width='180'></u></center></br>" ;
				echo"Welcome <u>$user</u>";
				echo "<h4>Name: $fname $lname</h4>";
				echo "<h4>Course: $course</h4>";
				echo "<h4>Email: $email</h4>";
				echo "<h4>DoB: $dob</h4>";
				echo "<h4>From: $origin</h4>";
				}}
				else{echo"Not found";}
	}else{echo"Not found";}
	?>
</div>	
<div id='right'>
<form method="POST" action="blogpost.php">
<h2><u>Login:</u></h2>
Title:   <input type="text" name="title" size="30"/><br />
<TEXTAREA NAME="body"  ROWS="6" COLS="75">

</TEXTAREA>
<br><br>
<input type="submit" value="Post" />
</form>
 <?php
$user=$_SESSION['username'];
	$query = "SELECT * FROM blog";
	$result=mysqli_query($connection,$query);
	if($result){
	
				while($row = mysqli_fetch_array($result)){
				extract($row);
				
				echo "<h4>Title: $title</h4>";
				echo "<p>body: $body</p>";
				echo "Posted by: $uname<br />";
				echo "Posted on: $posted";
				echo "<hr/>";
				}}
	else{echo"Not found";}
	?>
</div>
</div>
<div class='clear'></div>
 <div id= "footer">
<small><center>Registered to: Usman Muhammad 2831996 / Ammar Tariq 2824199</center></small></div>
</div>
</body>
</html>