<?php
include 'connect.php';
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
 $firstname=$_POST['fname'];
 $secondname=$_POST['lname'];
 $username=$_POST['username'];
 $course=$_POST['course'];
$password=$_POST['password'];
 $email=$_POST['email'];
 $dob=$_POST['dob'];
 $from=$_POST['from'];
 $path= $target_path;

$sql2="INSERT INTO registration(id,fname,lname,uname,course,pass,email,dob,origin,path) Values (default,'$firstname','$secondname','$username','$course','$password','$email','$dob','$from','$path')";
$result2=mysqli_query($connection,$sql2);
	mysqli_close($connection);
?>
