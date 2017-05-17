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
<form method="post" action="donologin.php"  enctype="multipart/form-data">
<center>
<table style="width:50%; borer:1px solid black;">
<tr>
	<td colspan="4" style="color:white;"><center><h1>Accepter Registration Form</h1></center></td>>
</tr>
<tr>
	<td style="color:white; float:right;">Name:</td>
	<td><input type="text" name="name" id="name" placeholder="Your Name"></td>
</tr><tr>
	<td style="color:white; float:right;">Age:</td>
	<td><input type="text" name="age" id="age" placeholder="Your Age"></td>
</tr><tr>
	<td style="color:white;float:right;">Accepter Blood Group:</td>
	<td><select name="group">
			<option value=''>Select Group</option>
			<option value="o+">O+</option>
			<option value="o-">O-</option>
			<option value="a+">A+</option>
			<option value="a-">A-</option>
			<option value="b+">B+</option>
			<option value="b-">B-</option>
			<option value="ab+">AB+</option>
			<option value="ab-">AB-</option>
			
			   
	</select></td>
</tr><tr>
	<td style="color:white;float:right;">Gender:</td>
	<td><select name="Gender">
			<option value=''>Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			   
	</select></td>
</tr><tr>
	<td style="color:white;float:right;">Contact No:</td>
	<td><input type="text" name="contact" id="contact" placeholder="Contact No"></td>
</tr><tr>
	<td style="color:white;float:right;">Address</td>
	<td><input type="text" name="address" id="address" placeholder="Your Address"></td>
</tr><tr >
	<td colspan="4"><center><input type="submit" name="submit" id="submit" value="Save Result"></center></td>
</tr>
</table>
</center> 
 
</form>
<center><p style="color:white; font-size:40px;">4 Children With Love</p></center>
</div>
</body>
</html>