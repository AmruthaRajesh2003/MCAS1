<?php
echo'<html>
<body>
<h1>Registration form </h1>
<form action=""method="POST">
Username:<input type="text" name="Username"><br><br>
Email:<input type="text" name="Email"><br><br>
Password::<input type="text" name="pass"><br><br>
Confirm Password::<input type="text" name="cpass"><br><br>
<input type="submit" value="Register">

<?php
if(empty($_POST["Username"])
empty($_POST["pass"])
empty($_POST["Email"])
empty($_POST["cpass"]))
{
die("please fill all required fields!");
}
if($_POST["pass"]!=$_POST["cpass"])
{
die("password and confirm passwordshould match");
}
else
{
die("successful");
}
?>
</form>
</body>
</html>';
?>