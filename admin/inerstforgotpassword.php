<?php /*?><?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$email=$_POST['txtemail'];
$phone=$_POST['txtphone'];
$email=$_POST['txtemail'];
if(isset($_POST['submit']))
{
	
	
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}
?> <?php 
error_reporting(0);
if($_POST['submit']=='Send')
{
//keep it inside
$email=$_POST['email'];
$code = $_GET['activation_code'];
$con=mysqli_connect("Localhost","root","123","user");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query = mysqli_query($con,"select * from login where user_email='$email'")
or die(mysqli_error($con)); 

 if (mysqli_num_rows ($query)==1) 
 {
$code=rand(100,999);
$message="You activation link is: http://bing.fun2pk.com/resetpass.php?email=$email&code=$code";
mail($email, "ZatWing", $message);
echo 'Email sent';
$query2 = mysqli_query($con,"update login set activation_code='$code' where user_email='$email' ")
or die(mysqli_error($con)); 
}
else
{
echo 'No user exist with this email id';

}}

?><?php */?>
<form action="forgotpassword.php" method="post">
Enter you email ID: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>


<?php
if(isset($_GET['email'])) {

    $acode = $_GET['email'];}
    echo $email;

if(isset($_POST['pass'])){
    $pass = $_POST['pass'];


$con=mysqli_connect("localhost","root","","gallary");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query = mysqli_query($con,"select * from admin where email='$email'")
or die(mysqli_error($con)); 

 if (mysqli_num_rows ($query)==1) 
{



$query3 = mysqli_query($con,"update admin set Password='$pass' where email='$email'")
or die(mysqli_error($con)); 

echo 'Password Changed';
}
else
{
echo 'Wrong CODE';

}}

?>

    <form action="login.php" method="POST">
    <p>New Password:</p><input type="password" name="pass" />
    <input type="submit"  name="submit" value="Signup!" />
    </form>

