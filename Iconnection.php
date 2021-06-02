<?php
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$emailid = $_POST['emailid'];		
$phn = $_POST['phn'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];

    
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "wildlife";

//create connection

$conn = new mysqli('localhost','root','','wildlife');
if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error);
}
else{
   
//prepare statement
$stmt = $conn->prepare("Insert into interns(fname,lname,emailid,phn,address,city,state,zipcode,country)
values(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssisssis", $fname,$lname,$emailid,$phn,$address,$city,$state,$zipcode,$country);
$stmt->execute();
echo '<script>alert("You has been Registerd successfully")</script>';
 

$stmt->close();
$conn->close();
}

?>