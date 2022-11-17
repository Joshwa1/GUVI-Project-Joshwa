<?php

$link = mysqli_connect("localhost", "root", "", "register");
 
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
 $fname = mysqli_real_escape_string($link,$_REQUEST['fname']);
 $lname = mysqli_real_escape_string($link,$_REQUEST['lname']);
 $mobile = mysqli_real_escape_string($link,$_REQUEST['mobile']);
 $email = mysqli_real_escape_string($link,$_REQUEST['email']);
 $password = mysqli_real_escape_string($link,$_REQUEST['password']);
 $confirm_password = mysqli_real_escape_string($link,$_REQUEST['confirm_password']);



// Attempt insert query execution
$sql = "INSERT INTO register (fname,lname,mobile,email,password, confirm_password) VALUES ('$fname','$lname','$mobile','$email','$password', '$confirm_password')";

if(mysqli_query($link, $sql)){
    echo "Message sent successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>