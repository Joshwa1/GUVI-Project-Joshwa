<?php

$link = mysqli_connect("localhost", "root", "", "register");
 
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
 $email = mysqli_real_escape_string($link,$_REQUEST['fname']);
 $password = mysqli_real_escape_string($link,$_REQUEST['password']);
 $confirm_password = mysqli_real_escape_string($link,$_REQUEST['confirm_password']);



// Attempt insert query execution
$sql = "INSERT INTO login (id,password, confirm_password) VALUES ('$email','$password', '$confirm_password')";

if(mysqli_query($link, $sql)){
    echo "Message sent successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>