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
<img src="GCD.jpg" alt="GCD" width="100" height="100" img align="left">
<h1><center><u>Gcd Social Networking</u></center></h1>
<div class="floatright"><h3><a href='logout.php'>Logout</a></h3></div>
</div>
<div id='nav'> 
<ul> 
<a href='profileDisplay.php' class='active'>Home</a>
<a href='edit.php'>Edit Profile</a>
<a href='myblogs.php'>Blogs</a>
<a href='photos.php'>Photos</a>
<a href='#'>Friends</a>
<a href='search.php'>Search People</a>
<a href='#'>Messages</a>
 </ul> 
</div> 
<div id='content'>
<div id='left'>
<br>Profile</br>

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
<h3>My Blog Posts:</h3>
<?php
$user=$_SESSION['username'];
	$query = "SELECT post_id,uname,title,body FROM blog WHERE uname='$user'";
	
	$result=mysqli_query($connection,$query);
	if($result){
		if(mysqli_num_rows($result)>=1){
				while($row = mysqli_fetch_array($result)){
				
				extract($row);
				$ida="$post_id";
				echo $ida;
			    
				?>
				<table border="1" style="width:50%;">
				<tr>
				<th rowspan="2" colspan ="2" style="width:20%;">blog</th>
				<td><?php echo "<h4>Title: $title</h4>";?></tr>
				<tr>
				<td><?php echo "<h4>body: $body</h4>";?></td>
				</tr>
				<td><a href='profileDisplay.php' class='active'>edit</a></td>
				<td><a href='deleteblog.php' class='active'>delete</a></td>
				
				</table>
					
			<?php
				
				}}
				else{echo"Not found";}
	}else{echo"Not found";}
	?>


</div>
</div>
<div class='clear'></div>
 <div id= "footer">
<small>Registered to: Usman Muhammad 2831996 / Ammar Tariq 2824199</small></div>
</div>
</body>
</html>