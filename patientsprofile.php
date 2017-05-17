<?php
include('connect.php');
session_start();
if((@$_SESSION['email']=="")||($_SESSION['password']=="")||($_SESSION['cat2']==""))
	{
		echo "<font color='red' size='3px' > you are not administrator! Plz login ............</font>";
		header('refresh:2, url=patientslogin.php');
	}
	else
	{
?>
<!DOCTYPE html>
<head>
  <title>Blood Bank</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style.css" type="text/css" rel="stylesheet"/>
  <style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
</head>
<body>
<div class="navbar">
	<div class="col-md-6">
		<p style="float:right;  margin-right:20px;margin-top:40px; font-weight:Bold; font-family:Tahoma, Geneva, sans-serif;">Save Life All About Cause</p>
		<img src="images/img3.jpg" style="height:100px; float:right;">
	</div>
	<div class="col-md-6">
		<?php  include('include/navbar3.php'); ?>
	</div>
	</div>
</div>
<div class="header" style="background:#2e4053; height:100%; margin:0; padding:0;">
	<div class="navbar" style="background:#2e4053;  margin:0; padding:0;;">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Member</a></li>
			<li><a href="#">Available</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">News</a></li>
		</ul>
	</div>
					
					
<center><p style="color:white; font-size:40px;">4 Children With Love</p></center>
</div>
<div class="col-md-6" style="background:#F2F2F2;">
<form>
<table class="table table-striped table-hover">
<input type="text" name="search" placeholder="Search..">
<tr style="background:#E6E6E6"><td colspan="6"><center><h1>Your Information</h1></center></td></tr>
			<?php
				$query = "select * from patient_register";
				$rs = mysql_query($query) or die(mysql_error());
				while($row = mysql_fetch_array($rs)){
					$name = $row['name'];
					$age = $row['age'];
					$email = $row['email'];
					$password = $row['password'];
					$gender = $row['gender'];
					$contact = $row['contact'];
					$address = $row['address'];
					$username = $row['username'];
					$weight = $row['weight'];
					$group = $row['blood_group'];
					$lddate = $row['lddate'];
					$often = $row['often'];

	
				}
?>
				<tr>
				<th>Name</th><th>Email</th><th>Gender</th><th>Blood Group</th><th>Age</th><th>Contact No</th>
				</tr>
			<tr>
				<td><?php echo $name;?></td>
				<td><?php echo $email;?></td>
				<td><?php echo $gender;?></td>
				<td><?php echo $group;?></td>
				<td><?php echo $age;?></td>
				<td><?php echo $contact;?></td>
			</tr>
</table>
</form>
</div>
<div class="col-md-6" style="background:#FBF5EF;">
<table class="table table-striped table-hover">
<input type="text" name="search" placeholder="Search..">
<tr style="background:#E6E6E6"><td colspan="6"><center><h1>Donor Information</h1></center></td></tr>
			<?php
				$query = "select * from donor_register";
				$rs = mysql_query($query) or die(mysql_error());
				while($row = mysql_fetch_array($rs)){
					$name = $row['name'];
					$age = $row['age'];
					$email = $row['email'];
					$password = $row['password'];
					$gender = $row['gender'];
					$contact = $row['contact'];
					$address = $row['address'];
					$username = $row['username'];
					$weight = $row['weight'];
					$group = $row['blood_group'];
					$lddate = $row['lddate'];
					$often = $row['often'];

	
				}
?>
				<tr>
				<th>Name</th><th>Email</th><th>Gender</th><th>Blood Group</th><th>Age</th><th>Contact No</th>
				</tr>
			<tr>
				<td><?php echo $name;?></td>
				<td><?php echo $email;?></td>
				<td><?php echo $gender;?></td>
				<td><?php echo $group;?></td>
				<td><?php echo $age;?></td>
				<td><?php echo $contact;?></td>
			</tr>
</table>
</form>
</div>
</body>
</html>
	<?php } ?>