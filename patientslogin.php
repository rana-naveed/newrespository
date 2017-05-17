<?php
include('connect.php');
session_start();
if((@$_SESSION['email']=="")||($_SESSION['password']=="")||($_SESSION['cat2']==""))
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
</head>
<body>
<div class="navbar">
	<div class="col-md-6">
		<p style="float:right;  margin-right:20px;margin-top:40px; font-weight:Bold; font-family:Tahoma, Geneva, sans-serif;">Save Life All About Cause</p>
		<img src="images/img3.jpg" style="height:100px; float:right;">
	</div>
	<div class="col-md-6">
		<?php  include('include/navbar1.php'); ?>
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
<div class="col-md-12">
	  <div class="col-md-4">
	  </div>
	   <div class="col-md-4">
<form action="patientslogin.php" method="post">
  <table class="table table-responsive table-bordered" width="40%" align="center">
     <tr>
       <td style="color:#c5eff7">Email:</td>
	   <td><label>
	   <input type="email" name="email" id="email" placeholder="Enter Email" required>
	   </label></td>
     </tr>
	 <tr>
       <td style="color:#c5eff7">Password</td>
	   <td><label><input type="password" name="password" id="password" placeholder="Enter Your Password.." required>
	   </label></td>
     </tr>
	 <tr>
       <td><input type="hidden" name="cat2" id="cat2" value="patient">
	   </td>
	 </tr>
	 <tr>
       <td align="center" colspan="2"><input type="submit" name="submit" id="submit" class="btn btn-info" value="SUBMIT">
	   <input type="reset" name="reset" id="reset" value="RESET" class="btn btn-info">
	   </td>
	 </tr>
	 <tr>
       <td align="center" colspan="2"><a href="patient_register.php" style="color:#c5eff7">Register Here</a></td>
	   
     </tr>
  </table>
</form>
</div>
 <div class="col-md-4">
 </div>
 </div>
<center><p style="color:white; font-size:40px;">4 Children With Love</p></center>
</div>
</body>
</html>
<?php
include('connect.php');

$messege = "<script>alert('Successfully log In')</script>";
$messege2 = "<script>alert('incorrect password and email')</script>";
	if(isset($_POST['submit']))
	{
		 $email = $_POST['email'];
		 $password = $_POST['password'];
		 $cat2 = $_POST['cat2'];
		$query = "select * from patient_register where email='$email' AND password='$password' AND cat2='$cat2'";	
		$run = mysql_query($query);
	

	if(mysql_num_rows($run)>0)
		{
			echo "<script>alert('Successfully log In')</script>";
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['cat2'] = $cat2;
			header("location:patientsprofile.php");
		}
		else{
			echo "<script>alert('incorrect password and email')</script>";
			header("location:patientslogin.php");
			}
	}
?>
<?php
} 
else
	{
echo "<font color='red' size='3px' > you are already login ............</font>";
		header('refresh:2, url=patientsprofile.php');
	}
	
 ?>
