<?php
session_start();
include('connect.php');
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password or category is invalid";
}
else
{
 $email = $_POST['email'];
 $password= $_POST['password'];


$query = "SELECT * FROM patient_register WHERE email = '$email' AND password='$password'";

$rs = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($rs)){
 $_SESSION['email']=$email;
 $_SESSION['password']=$password;
echo "<script>alert('successful login')</script>";
header("Location:22.php");
}
else{
echo "<script>alert('email or password is invalid!')</script>";
header("Location:login.php");


}
mysql_close();

}

}
?>
