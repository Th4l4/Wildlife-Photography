<!DOCTYPE html>
<html lang="en">
<head>
<title>Table</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <center><h2>Registered Interns</h2></center>
    </head>
    <br>
    <br>
<tbody>
<div class="container">
<table class="table">
<thead>
<tr> 
<th>S.NO</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email ID</th>
<th>Phone Number</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip Code</th>
<th>Country</th>






</tr>
</thead>




	
<?php
//Data Base connection
$con = mysqli_connect('localhost', 'root','','wildlife');



//Sql query
$sql="SELECT * FROM interns ";
//Executive the query
$query=mysqli_query($con,$sql);
//Serial Number for Dynamic
$i=1;
//fetch the data from data base through while condition
while($user=mysqli_fetch_assoc($query))
{
?>
<body>
<tr>
<td><?php echo $i++;?></td>
<td><?php echo $user['fname'];?></td>
<td><?php echo $user['lname'];?></td>
<td><?php echo $user['emailid'];?></td>
<td><?php echo $user['phn'];?></td>
<td><?php echo $user['address'];?></td>
<td><?php echo $user['city'];?></td>
<td><?php echo $user['state'];?></td>
<td><?php echo $user['zipcode'];?></td>
<td><?php echo $user['country'];?></td>
</tr>
<?php
}
    
?>
</tbody>
</table>
</div>
</body>
</html>
