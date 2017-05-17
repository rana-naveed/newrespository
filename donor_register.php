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
	  <div class="col-md-2">
	  </div>
	   <div class="col-md-8">
<form method="post" action="donor_register.php" name="myForm">
<center>
<table class="table table-bordered table-responsive" width="100%">
<tr>
	<td colspan="4" style="color:white;"><center><h4>Donor Registration Form</h4></center></td>>
</tr>
<tr>
	<td style="color:#c5eff7">Name:</td>
	<td><input type="text" name="name" id="name" placeholder="Your Name" required></td>
</tr><tr>
	<td style="color:#c5eff7">Age:</td>
	<td><input type="number" size="6" name="age" min="18" max="55" value="21"><p style="color:#c5eff7;">Above 18 and below 55</p></td>
</tr>
<tr>
	<td style="color:#c5eff7">Email</td>
	<td><input type="email" name="email" id="email" placeholder="Email.." required></td>
</tr>
<tr>
	<td style="color:#c5eff7">Password</td>
	<td><input type="password" name="password" maxlength="12" minlength="8" id="password" placeholder="Password"></td>
</tr>
<tr>
	<td style="color:#c5eff7">Conform Password</td>
	<td><input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"></td>
</tr>
<tr>
	<td style="color:#c5eff7">Username</td>
	<td><input type="text" name="username" id="username" placeholder="Username...." required></td>
</tr>
<tr>
	<td style="color:#c5eff7">Weight:</td>
	<td><input type="number" name="weight" id="weight" min="40" max="100" value="40" required></td>
</tr>

<tr>
	<td style="color:#c5eff7" >Donor Blood Group:</td>
	<td><label><select name="group">
	<option  > SELECT Option	</option>
			<option value="A1+" > A1+	</option>	
			<option value="A1-" > A1-		</option>
			<option value="A2+" > A2+	</option>	
			<option value="A2-" > A2-	</option>	
			<option value="B+" > B+	</option>	
			<option value="B-" > B-	</option>	
			<option value="A1B+" > A1B+</option>	
			<option value="A1B-" > A1B-	</option>
			<option value="A2B+" > A2B+	</option>
			<option value="A2B-" > A2B-	</option>
			<option value="AB+" > AB+	</option>
			<option value="AB-" > AB-	</option>
			<option value="O+" > O+		</option>
			<option value="O-" > O-		</option>
			<option value="A+" > A+		</option>
			<option value="A-" > A-		</option>
			
			</select></label>
			
			
			   
	</select></td>
</tr><tr>
	<td style="color:#c5eff7">Gender:</td>
	<td><select name="gender">
			<option value=''>Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			   
	</select></td>
</tr><tr>
	<td style="color:#c5eff7">Contact No:</td>
	<td><input type="text" name="contact" id="contact" placeholder="Contact No" required></td>
</tr><tr>
	<td style="color:#c5eff7">Address</td>
	<td><textarea type="text" name="address" id="address" placeholder="Your Address" required></textarea>
</tr>
<tr>
	<td style="color:#c5eff7">Add City:</td>
	<td><input type="text" name="city" id="city" placeholder="Add City" required></td>
</tr>
<tr>
	<td style="color:#c5eff7">Last Donation Date</td>
	<td><input type="date" name="lddate" id="lddate" required></td>
</tr>
<tr>
	<td style="color:#c5eff7">How Often You donate</td>
	<td><select name="often">
	  <option>Select Below</option>
	  <option>Regular Donate</option>
	  <option>On Need Base</option>
	  <option>First Time</option>
	</select></td>
</tr>
<tr >
	<td>
	<input type="hidden" name="cat1" id="cat1" value="donor">
	</td>
</tr>
<tr >
	<td colspan="2"><center>
	<input type="submit" class="btn btn-info" name="submit" id="submit" value="Save Result">
	<input type="reset" class="btn btn-info" name="reset" id="reset" value="Reset"></center></td>
</tr>
</table>
</center> 
 
</form>
</div>
 <div class="col-md-2">
 </div>
 </div>
<center><p style="color:white; font-size:40px;">4 Children With Love</p></center>
</div>
</body>
</html>
<?php
include('connect.php');

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$username = $_POST['username'];
	$weight = $_POST['weight'];
	$group = $_POST['group'];
	$lddate = $_POST['lddate'];
	$often = $_POST['often'];
	$cat1 = $_POST['cat1'];
	if($password==$cpassword){
		$query = "INSERT INTO donor_register(name,age,email,password,username,weight,blood_group,gender,contact,lddate,often_donate,address,city,cat1)
		VALUES('$name','$age','$email','$password','$username','$weight','$group','$gender','$contact','$lddate','$often','$address','$city','$cat1')";
	    $rs = mysql_query($query) or die(mysql_error());
      if($rs){
		  echo "<script>alert('Data insert Successfully')</script>";
	  }		
	  else{
		   echo "<script>alert('Error')</script>";
	  }
	}
	else{
		
		 echo "<script>alert('You Enter incorrect Password')</script>";
	}
}

?>