<?php
session_start();
session_destroy();

?>
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
</div>
<div id='nav'> 
<ul> <center>
Successfully Logged Out </br>
Thankyou for using GCD Social Networking</br>
<input type="button" onclick="parent.location='index.php'" value="Login Again">     
 </ul> </center>
</div> 
<div id='content'>
<div id='left'>

</div>	

<div id='right'>

 
 
</div>
</div>
<div class='clear'></div>
 <div id= "footer">
<small><center>Registered to: Usman Muhammad 2831996 / Ammar Tariq 2824199</center></small></div>
</div>
</body>
</html>

?>