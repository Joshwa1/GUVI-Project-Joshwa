<?php

$link = mysqli_connect("localhost", "root", "", "welcome");
 
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
 $fname = mysql_real_escape_string($link,$_REQUEST['fname']);
 $lname = mysql_real_escape_string($link,$_REQUEST['lname']);
 $reg_no = mysql_real_escape_string($link,$_REQUEST['reg_no']);
 $email = mysql_real_escape_string($link,$_REQUEST['email']);
 $dob = mysql_real_escape_string($link,$_REQUEST['dob']);
 $mobnumber = mysql_real_escape_string($link,$_REQUEST['mobnumber']);


 $fathername = mysql_real_escape_string($link,$_REQUEST['fathername']);
 $fathermobile = mysql_real_escape_string($link,$_REQUEST['fathermobile']);
 $mothername = mysql_real_escape_string($link,$_REQUEST['mothername']);
 $mothernumber = mysql_real_escape_string($link,$_REQUEST['mothernumber']);
 $occupation = mysql_real_escape_string($link,$_REQUEST['occupation']);
 $income = mysql_real_escape_string($link,$_REQUEST['income']);



 $religion = mysql_real_escape_string($link,$_REQUEST['religion']);
 $address = mysql_real_escape_string($link,$_REQUEST['address']);
 $state = mysql_real_escape_string($link,$_REQUEST['state']);





// Attempt insert query execution
$sql = "INSERT INTO welcome (fname,lname,reg_no, email, dob, mobnumber, fathername, fathermobile, mothername, mothernumber, occupation, income, religion, address, state) VALUES ('$fname','$lname','$reg_no','$email', '$dob', '$number', '$fathername', '$fathermobile', '$mothername', '$mothernumber', '$occupation', '$income', '$religion', '$address', '$state')";

if(mysqli_query($link, $sql)){
    echo "Message sent successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>