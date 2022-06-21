<?php
$connect = mysqli_connect("localhost","root","","register");
if(isset($_POST['register'])){

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];

$query = "INSERT INTO users(firstname,surname,username,email,gender,password) VALUES ('$fname','$sname','$uname','$email','$gender','$pass')";

$result = mysqli_query($connect,$query);
if ($result){
	echo "<script>alert('you have successfully registered')</script>";
}else{
	echo "<script>alert('you have not registered')</script>";
}

}


?>



<body>
	<center>
		<h1>REGISTRATION FORM</h1>
		<br>
		<form method="post">
			<label>Firstname</label>
			<input type="text" name="fname" placeholder="enter your first name"/>
			<br>
			<br>
			<label>surname</label>
			<input type="text" name="sname" placeholder="enter your last name"/>
			<br>
			<br>
			<label>Username</label>
			<input type="text" name="uname" placeholder="enter your username"/>
			<br>
			<br>
			<label>Email</label>
			<input type="email" name="email" placeholder="email"/>
			<br>
			<br>
			<label>Gender</label>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="others">Others
			<br>
			<br>
			<label>Password</label>
			<input type="password" name="pass" placeholder="password"/>
			<br>
			<br>
			<input type="submit" name="register" value="register">
</form>
</center>

